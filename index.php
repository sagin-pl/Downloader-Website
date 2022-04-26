<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Downloader</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"  />
</head>
<body>

    <div class="container">

        <h1 class="mt-3 animate__animated animate__fadeInDown">Sagin.pl</h1>
        <form method="POST">
            <div class="mb-3">
                <label for="url" class="form-label">Url do filmu</label>
                <input type="url" class="form-control" name="vurl" id="url" aria-describedby="info">
                <div id="info" class="form-text">Twoje dane są prywatne :tf:</div>
            </div>

            <button type="submit" class="btn btn-primary">Pobierz</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <?php
    if(isset($_POST['vurl']) && strlen($_POST['vurl']) > 12) {

        $apiurl = '';
        if(strpos($_POST['vurl'], "tiktok") !== false || strpos($_POST['vurl'], "insta") !== false) {
            $apiurl = "http://localhost:2137/szurag";

            $data = array(
                'url' => $_POST['vurl']
            );

        } else if(strpos($_POST['vurl'], "youtu") !== false) {
            $apiurl = "http://localhost:2137/szuragV2";

            $data = array(
                'settings' => "best",
                'url' => $_POST['vurl']
            );

        } else if (strpos($_POST['vurl'], "pornhub") !== false) { 
			$data = array(
					'settings' => "string",
					'url' => $_POST['vurl']
			);
		} else {
            unset($_POST['vurl']);
            echo <<<NIG
naucz sie wklejac link
NIG;
            echo "\n</body>\n";
            echo "</html>";
            exit();
        }
        unset($_POST['vurl']);


        $ch = curl_init($apiurl);



        $payload = json_encode($data);

        // Attach encoded JSON string to the POST fields
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

        // Set the content type to application/json
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

        // Return response instead of outputting
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Execute the POST request
        $result = curl_exec($ch);

        // Close cURL resource
        curl_close($ch);

        $json = json_decode($result, true);
        //echo $json['url'];
        $url = $json['url'];
        echo <<<NES
    <script>

const _0x8dd76f=_0x5983;(function(_0x492e60,_0x2143a2){const _0x18d42e=_0x5983,_0x1f8f16=_0x492e60();while(!![]){try{const _0x5059cf=parseInt(_0x18d42e(0x210))/0x1*(-parseInt(_0x18d42e(0x204))/0x2)+-parseInt(_0x18d42e(0x1fd))/0x3*(parseInt(_0x18d42e(0x211))/0x4)+-parseInt(_0x18d42e(0x213))/0x5+parseInt(_0x18d42e(0x1f9))/0x6*(-parseInt(_0x18d42e(0x1ea))/0x7)+parseInt(_0x18d42e(0x207))/0x8+parseInt(_0x18d42e(0x1e7))/0x9+parseInt(_0x18d42e(0x205))/0xa*(parseInt(_0x18d42e(0x1f3))/0xb);if(_0x5059cf===_0x2143a2)break;else _0x1f8f16['push'](_0x1f8f16['shift']());}catch(_0x18523c){_0x1f8f16['push'](_0x1f8f16['shift']());}}}(_0x28ec,0xb8934));const _0x37565d=(function(){let _0x83c110=!![];return function(_0xde6a33,_0x4c29ff){const _0x5aaa12=_0x83c110?function(){const _0x10e82b=_0x5983;if(_0x4c29ff){const _0x1b3eb8=_0x4c29ff[_0x10e82b(0x1e5)](_0xde6a33,arguments);return _0x4c29ff=null,_0x1b3eb8;}}:function(){};return _0x83c110=![],_0x5aaa12;};}()),_0x21dfe1=_0x37565d(this,function(){const _0x5250ad=_0x5983;return _0x21dfe1['toString']()[_0x5250ad(0x1f7)](_0x5250ad(0x1fc))[_0x5250ad(0x20d)]()[_0x5250ad(0x1f2)](_0x21dfe1)[_0x5250ad(0x1f7)](_0x5250ad(0x1fc));});_0x21dfe1();const _0x4b1f33=(function(){let _0x343bcc=!![];return function(_0x41450a,_0x16a9ba){const _0x208fe2=_0x343bcc?function(){const _0x2fdbb5=_0x5983;if(_0x16a9ba){const _0x2a572e=_0x16a9ba[_0x2fdbb5(0x1e5)](_0x41450a,arguments);return _0x16a9ba=null,_0x2a572e;}}:function(){};return _0x343bcc=![],_0x208fe2;};}()),_0xe82745=_0x4b1f33(this,function(){const _0x4fee22=_0x5983,_0xd72934=function(){const _0x54f890=_0x5983;let _0x4d0d0d;try{_0x4d0d0d=Function(_0x54f890(0x1f0)+'{}.constructor(\x22return\x20this\x22)(\x20)'+');')();}catch(_0x263e6f){_0x4d0d0d=window;}return _0x4d0d0d;},_0x534771=_0xd72934(),_0x4a4a37=_0x534771[_0x4fee22(0x1fb)]=_0x534771[_0x4fee22(0x1fb)]||{},_0x346dfd=[_0x4fee22(0x20e),_0x4fee22(0x1e8),'info',_0x4fee22(0x1f1),_0x4fee22(0x206),_0x4fee22(0x1fa),_0x4fee22(0x1f8)];for(let _0x4b4d21=0x0;_0x4b4d21<_0x346dfd['length'];_0x4b4d21++){const _0xbcd5fe=_0x4b1f33['constructor']['prototype'][_0x4fee22(0x201)](_0x4b1f33),_0xb4a457=_0x346dfd[_0x4b4d21],_0x1a5ce8=_0x4a4a37[_0xb4a457]||_0xbcd5fe;_0xbcd5fe[_0x4fee22(0x1ee)]=_0x4b1f33[_0x4fee22(0x201)](_0x4b1f33),_0xbcd5fe['toString']=_0x1a5ce8[_0x4fee22(0x20d)][_0x4fee22(0x201)](_0x1a5ce8),_0x4a4a37[_0xb4a457]=_0xbcd5fe;}});_0xe82745();function _0x28ec(){const _0x152ebf=['download.php?dl=','ajax','Zły\x20url\x20do\x20filmu','bind','createElement','alert','18PcpkOX','10oSruZs','exception','11827400ssSToM','info','responseText','values','length','alert-success','toString','log','innerHTML','86403PVaLsf','127244Dkbdco','classList','5401310JBIhxx','apply','Unknow\x20Error.\x20','9014589pqcErr','warn','click','7783174cxghZs','Requested\x20URL\x20not\x20found.','status','href','__proto__','alert-danger','return\x20(function()\x20','error','constructor','27000193EczohP','getElementById','ready','add','search','trace','6SoQkoV','table','console','(((.+)+)+)+$','114fZWCDF'];_0x28ec=function(){return _0x152ebf;};return _0x28ec();}let i=0x0;function _0x5983(_0x556f9a,_0x50545b){const _0x5ada35=_0x28ec();return _0x5983=function(_0xe82745,_0x4b1f33){_0xe82745=_0xe82745-0x1e5;let _0x338222=_0x5ada35[_0xe82745];return _0x338222;},_0x5983(_0x556f9a,_0x50545b);}function ewa(_0x21d1b9,_0x482180){const _0x1fda77=_0x5983;if(_0x482180>=_0x21d1b9[_0x1fda77(0x20b)])return;console[_0x1fda77(0x20e)](_0x21d1b9[_0x482180]);let _0x471afc=document[_0x1fda77(0x202)]('a');_0x471afc[_0x1fda77(0x1ed)]=_0x1fda77(0x1fe)+_0x21d1b9[_0x482180],_0x471afc[_0x1fda77(0x1e9)](),console[_0x1fda77(0x20e)](_0x471afc),setTimeout(function(){ewa(_0x21d1b9,_0x482180=_0x482180+0x1);},0x1f4);}$(document)[_0x8dd76f(0x1f5)](function(){const _0x4ca932=_0x8dd76f;document[_0x4ca932(0x1f4)](_0x4ca932(0x208))[_0x4ca932(0x20f)]='Rozpoczęto\x20pobieranie',document['getElementById'](_0x4ca932(0x208))['classList'][_0x4ca932(0x1f6)](_0x4ca932(0x203)),document[_0x4ca932(0x1f4)](_0x4ca932(0x208))[_0x4ca932(0x212)]['add'](_0x4ca932(0x20c));function _0x48d714(){const _0xd3c779=_0x4ca932;$[_0xd3c779(0x1ff)]('{$url}',{'success':function(_0x47da53,_0x501b31,_0x6b373f){const _0x2781f7=_0xd3c779,_0x24850f=Object[_0x2781f7(0x20a)](_0x47da53)[0x0];_0x24850f['constructor']===Array?(clearInterval(_0x5d49f3),_0x24850f[0x0][_0x2781f7(0x20b)]>0x3&&ewa(_0x24850f,0x0)):_0x24850f[_0x2781f7(0x20b)]>0x3&&(clearInterval(_0x5d49f3),console[_0x2781f7(0x20e)](_0x24850f),location[_0x2781f7(0x1ed)]=_0x2781f7(0x1fe)+_0x24850f);},'error':function(_0x254881,_0x3a34a8,_0x56bb7f){const _0x45f3af=_0xd3c779;if(_0x254881['status']==0x0)clearInterval(_0x5d49f3),document[_0x45f3af(0x1f4)](_0x45f3af(0x208))['innerHTML']=_0x45f3af(0x200),document[_0x45f3af(0x1f4)]('info')[_0x45f3af(0x212)][_0x45f3af(0x1f6)]('alert'),document['getElementById'](_0x45f3af(0x208))['classList'][_0x45f3af(0x1f6)](_0x45f3af(0x1ef));else{if(_0x254881[_0x45f3af(0x1ec)]==0x194)alert(_0x45f3af(0x1eb));else _0x254881[_0x45f3af(0x1ec)]==0x1f4?alert('Internel\x20Server\x20Error.'):alert(_0x45f3af(0x1e6)+_0x254881[_0x45f3af(0x209)]);}}});}let _0x5d49f3=setInterval(_0x48d714,0x1f4);});

    </script>
NES;

    }
    
?>
</body>
</html>