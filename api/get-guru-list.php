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

    $url = 'https://smansapringsewu.sch.id/wp-admin/admin-ajax.php';

    $parameters = [
        "action" => $_GET['action'] ?? "ajax_build",
        "rows" => $_GET['rows'] ?? 20,
        "sort" => $_GET['sort'] ?? -2,
        "page" => $_GET['page'] ?? 1,
        "wait" => $_GET['wait'] ?? false,
    ];

    if (isset($_GET['search'])) {
        $parameters["search"] = $_GET["search"];
    }

    $to_fetch = $url . '?' . http_build_query($parameters);
    $remote_file_content = $fetch($to_fetch);
        
    $parsed = json_decode($remote_file_content, true);

    $DOM = new DOMDocument();
    $DOM->loadHTML($parsed['html'], LIBXML_NOERROR);
    $simplexdom = simplexml_import_dom($DOM);

    $gurulist = array();

    if ($remote_file_content != false) {
        $guru_array = $simplexdom->body->table->tbody->tr;
        foreach ($guru_array as $guru) {
            $raw_json_data = $guru->td->p->attributes()->rel[0];
            $json_data = json_decode($raw_json_data, true);
            $gurulist[] = array(
                'Nama' => $json_data['Nama Lengkap'],
                'BidangStudi' => $json_data['Bidang Studi'],
                'Jabatan' => $json_data['Jabatan'],
                'No' => $json_data['NO'],
            );
        }
    }

    $result = array(
        "status" => $remote_file_content != false,
        "data" => $gurulist,
    );

    $printout = json_encode($result);
    header("Content-Type", "application/json");
    echo $printout;
?>