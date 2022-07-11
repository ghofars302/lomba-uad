<?php
    session_write_close();

    $fetch = function($url) {
        $curl_handle = curl_init();
        curl_setopt($curl_handle, CURLOPT_URL, $url);
        curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);
        curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl_handle, CURLOPT_USERAGENT, 'php');
        $query = curl_exec($curl_handle);
        curl_close($curl_handle);

        if ($query == false) {
            throw new Exception("Failed to fetch $url");
        }

        return $query;
    };

    $url = 'https://smansapringsewu.sch.id/?cat=54';
    $html_data = $fetch($url);
    $DOM = new DOMDocument();
    $DOM->loadHTML($html_data, LIBXML_NOERROR);
    $finder = new DomXPath($DOM);
    // find div td-main-content-wrap td-container-wrap
    $nodes = $finder->query("//div[@class='td-main-content-wrap td-container-wrap']");

    foreach ($nodes as $node) {
        // get html of that node
        

        $result = print_r(htmlspecialchars($node->ownerDocument->saveHTML()), true);
        echo @"
            <b>--------------------</b>
            <pre>
                {$result}
            </pre>
            </b>--------------------</b
        ";
    }
?>