<?php

namespace Browscap\Generator;

class BrowscapIniGenerator
{
    protected $divisions;

    protected $divisionsHaveBeenSorted = false;

    /**
     * Load a JSON file, parse it's JSON and add it to our divisions list
     *
     * @param string $src Name of the file
     * @throws \Exception if the file does not exist
     */
    public function addSourceFile($src)
    {
        if (!file_exists($src)) {
            throw new \Exception("File {$src} does not exist.");
        }

        $fileContent = file_get_contents($src);
        $json = json_decode($fileContent, true);

        $this->divisions[$json['divisionIndex']] = $json;
    }

    /**
     * Sort the divisions (if they haven't already been sorted)
     *
     * @todo Change the way the sorting works. Currently it's a "unique" ID sorting
     * but we should do this by having a general "sort order" value instead so that
     * collisions don't matter, and if we wanted to insert a division after Default
     * Properties for example, we'd have to renumber all the other UAs!!! carnage.
     *
     * @return boolean
     */
    public function sortDivisions()
    {
        if (!$this->divisionsHaveBeenSorted) {
            if (ksort($this->divisions, SORT_NUMERIC)) {
                $this->divisionsHaveBeenSorted = true;
                return true;
            }
        }

        return false;
    }

    public function generateBrowscapIni($version)
    {
        $this->sortDivisions();

        $output = $this->generateHeader($version);

        foreach ($this->divisions as $division) {
            if ($division['division'] == 'Browscap Version') continue;

            $output .= ';;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; ' . $division['division'] . "\n\n";

            foreach ($division['userAgents'] as $uaData) {
                $output .= '[' . $uaData['userAgent'] . "]\n";

                foreach ($uaData['properties'] as $property => $value) {
                    $output .= sprintf("%s=%s\n", $property, $value);
                }

                $output .= "\n";
            }
        }

        return $output;
    }

    public function generateHeader($version)
    {
        $dateUtc = date('l, F j, Y \a\t h:i A T');
        $date = date('r');

        $header = "";

        $header .= ";;; Provided courtesy of http://tempdownloads.browserscap.com/\n";
        $header .= ";;; Created on {$dateUtc}\n\n";

        $header .= ";;; Keep up with the latest goings-on with the project:\n";
        $header .= ";;; Follow us on Twitter <https://twitter.com/browscap>, or...\n";
        $header .= ";;; Like us on Facebook <https://facebook.com/browscap>, or...\n";
        $header .= ";;; Collaborate on GitHub <https://github.com/GaryKeith/browscap>, or...\n";
        $header .= ";;; Discuss on Google Groups <https://groups.google.com/d/forum/browscap>.\n\n";

        $header .= ";;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; Browscap Version\n\n";

        $header .= "[GJK_Browscap_Version]\n";
        $header .= "Version={$version}\n";
        $header .= "Released={$date}\n\n";

        return $header;
    }
}