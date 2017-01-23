<?php
	include_once "db_conn.php";
	
	function runQuery($conn, $sql, $msg) {
		if ($conn->query($sql)) {
			echo "Data " . $msg. " successfully<br>";
		} else {
			echo $conn->error . "<br>";
		}
	}
	
	$sql = "TRUNCATE phonedata";
	
	runQuery($conn, $sql, "truncated");

	$sql = "INSERT INTO phonedata (
				image,
				name,
				tech,
				2g_bands,
				3g_net,
				4g_net,
				speed,
				gprs,
				edge,
				announced,
				status,
				dim,
				weight,
				sim,
				display_type,
				display_size,
				res,
				multitouch,
				protect,
				os,
				chipset,
				cpu,
				gpu,
				card_slot,
				internal,
				cam_primary,
				features,
				video,
				cam_secondary,
				alert_types,
				loudspk,
				3o5mm_jack,
				wlan,
				bluetooth,
				gps,
				nfc,
				infr_port,
				radio,
				usb,
				sensors,
				msging,
				browser,
				java,
				battery_type,
				stand_by,
				talk_time,
				music_play,
				colors,
				sar_us,
				sar_eu,
				network_rating,
				launch_rating,
				body_rating,
				display_rating,
				platform_rating,
				mem_rating,
				cam_rating,
				sound_rating,
				comm_rating,
				feat_rating,
				batt_rating,
				misc_rating,
				outOf10
			) VALUES (
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',    
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',    
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				''
			)";
			
	runQuery($conn, $sql, "inserted");

	/////////////////////////////////////////////////////////////////////////////////////////

	$sql = "INSERT INTO phonedata (
				image,
				name,
				tech,
				2g_bands,
				3g_net,
				4g_net,
				speed,
				gprs,
				edge,
				announced,
				status,
				dim,
				weight,
				sim,
				display_type,
				display_size,
				res,
				multitouch,
				protect,
				os,
				chipset,
				cpu,
				gpu,
				card_slot,
				internal,
				cam_primary,
				features,
				video,
				cam_secondary,
				alert_types,
				loudspk,
				3o5mm_jack,
				wlan,
				bluetooth,
				gps,
				nfc,
				infr_port,
				radio,
				usb,
				sensors,
				msging,
				browser,
				java,
				battery_type,
				stand_by,
				talk_time,
				music_play,
				colors,
				sar_us,
				sar_eu,
				network_rating,
				launch_rating,
				body_rating,
				display_rating,
				platform_rating,
				mem_rating,
				cam_rating,
				sound_rating,
				comm_rating,
				feat_rating,
				batt_rating,
				misc_rating 
			) VALUES (
				'motorola_moto_g4_play.png',
				'Motorola Moto G4 Play',
				'GSM / CDMA / HSPA / LTE',
				'GSM 850 / 900 / 1800 / 1900<br>CDMA 800 / 1900 - XT1607, XT1609',
				'HSDPA 850 / 900 / 1700(AWS) / 1900 / 2100 - XT1607',
				'LTE band 1(2100), 2(1900), 3(1800), 4(1700/2100), 5(850), 7(2600), 8(900), 12(700), 13(700), 17(700), 25(1900), 26(850), 41(2500) - XT1607<br>LTE band 2(1900), 4(1700/2100), 5(850), 13(700) - XT1609',
				'HSPA 42.2/5.76 Mbps, LTE Cat4 150/50 Mbps, EV-DO Rev.A 3.1 Mbps',
				'Yes',
				'Yes',
				'2016, May',
				'Coming soon',
				'144.4 x 72 x 9.9 mm (5.69 x 2.83 x 0.39 in)',
				'137 g (4.83 oz)',
				'Micro-SIM',
				'IPS LCD capacitive touchscreen, 16M colors',
				'5.0 inches (~66.3% screen-to-body ratio)',
				'720 x 1280 pixels (~294 ppi pixel density)',
				'Yes',
				'',
				'Android OS, v6.0.1 (Marshmallow)',
				'Qualcomm MSM8916 Snapdragon 410',
				'Quad-core 1.2 GHz Cortex-A53',
				'Adreno 306',    
				'microSD, up to 128 GB (dedicated slot)',
				'8/16 GB, 1/2 GB RAM',
				'8 MP, f/2.2, autofocus, LED flash',
				'Geo-tagging, touch focus, face detection, panorama, HDR',
				'1080p@30fps',
				'5 MP, f/2.2',
				'Vibration, MP3, WAV ringtones',
				'Yes',
				'Yes',
				'Wi-Fi 802.11 b/g/n, Wi-Fi Direct, hotspot',
				'v4.1, A2DP, LE',
				'Yes, with A-GPS, GLONASS, BDS',
				'Yes (optional)',
				'No',
				'FM radio',
				'microUSB v2.0',
				'Accelerometer, proximity',
				'SMS(threaded view), MMS, Email, Push Email, IM',
				'HTML5',
				'No',
				'Non-removable Li-Ion 2800 mAh battery',
				'',    
				'',
				'',
				'Black, White',
				'',
				'',
				'10',
				'10',
				'10',
				'10',
				'10',
				'10',
				'10',
				'10',
				'10',
				'10',
				'10',
				'10'
			)";
			
	runQuery($conn, $sql, "inserted");
	
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	
	 $sql = "INSERT INTO phonedata (
				image,
				name,
				tech,
				2g_bands,
				3g_net,
				4g_net,
				speed,
				gprs,
				edge,
				announced,
				status,
				dim,
				weight,
				sim,
				display_type,
				display_size,
				res,
				multitouch,
				protect,
				os,
				chipset,
				cpu,
				gpu,
				card_slot,
				internal,
				cam_primary,
				features,
				video,
				cam_secondary,
				alert_types,
				loudspk,
				3o5mm_jack,
				wlan,
				bluetooth,
				gps,
				nfc,
				infr_port,
				radio,
				usb,
				sensors,
				msging,
				browser,
				java,
				battery_type,
				stand_by,
				talk_time,
				music_play,
				colors,
				sar_us,
				sar_eu,
				network_rating,
				launch_rating,
				body_rating,
				display_rating,
				platform_rating,
				mem_rating,
				cam_rating,
				sound_rating,
				comm_rating,
				feat_rating,
				batt_rating,
				misc_rating
			) VALUES (
				'blu_pure_xl.png',
				'BLU Pure XL',
				'GSM / HSPA / LTE',
				'GSM 850 / 900 / 1800 / 1900 - SIM 1 & SIM 2',
				'HSDPA 850 / 1700(AWS) / 1900 / 2100',
				'LTE band 2(1900), 4(1700/2100), 7(2600), 17(700)',
				'HSPA 42.2/5.76 Mbps, LTE Cat4 150/50 Mbps',
				'Yes',
				'Yes',
				'2015, September',
				'Available. Released 2015, September',
				'164 x 82.2 x 9.3 mm (6.46 x 3.24 x 0.37 in)',
				'207 g (7.30 oz)',
				'Dual SIM (Micro-SIM, dual stand-by)',
				'AMOLED capacitive touchscreen, 16M colors',
				'6.0 inches (~73.6% screen-to-body ratio)',
				'1440 x 2560 pixels (~490 ppi pixel density)',
				'Yes',
				'Corning Gorilla Glass 3',
				'Android OS, v5.1 (Lollipop)',
				'Mediatek MT6795 Helio X10',
				'Octa-core 2.0 GHz Cortex-A53',
				'PowerVR G6200',    
				'microSD, up to 64 GB (dedicated slot)',
				'64 GB, 3 GB RAM',
				'24 MP, OIS, phase detection autofocus, dual-LED (dual tone) flash',
				'1/2.3" . '"' . " sensor size, geo-tagging, touch focus, face/smile detection, panorama, HDR',
				'2160p@30fps',
				'8 MP, autofocus',
				'Vibration; MP3, WAV ringtones',
				'Yes',
				'Yes<br>- 24-bit/192kHz audio<br>- DTS Surround Sound',
				'Yes',
				'v4.0, A2DP, EDR',
				'Yes, with A-GPS',
				'Yes',
				'FM radio, recording',
				'microUSB v2.0, USB Host',
				'Fingerprint, accelerometer, gyro, proximity, compass',
				'SMS(threaded view), MMS, Email, Push Email, IM',
				'HTML5',
				'No<br>- Active noise cancellation with dedicated mic<br>- MP4/H.264 player<br>- MP3/WAV/eAAC+ player<br>- Photo/video editor<br>- Document viewer',
				'Non-removable Li-Po 3500 mAh battery',
				'Up to 800 h (2G) / Up to 725 h (3G)',
				'Up to 38 h (2G) / Up to 24 h (3G)',    
				'N/A',
				'Black, Gold',
				'N/A',
				'N/A',
				'N/A',
				'8',
				'10',
				'6',
				'9',
				'7',
				'9',
				'7',
				'8',
				'9',
				'9',
				'9',
				'10'
		    )";
			
	runQuery($conn, $sql, "inserted");
	
	$conn->close();
?>