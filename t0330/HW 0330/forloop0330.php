<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br><br>";
    }

    echo"<br>";

    $number = 50;
    $addNumber = 5;
    for ($y=0; $y <=$number ; $y+=$addNumber) { 
        echo "$y".'<br>';
    };

    echo"練習 1+2+3...+10 total為?<br>";

    // for ($n=1; $n <=10 ; $n+=$add++) { 
    //     echo "$n".'<br>';
    // };


    // for( $x=1 ; $x<=10 ; ++$x ){ 
    //     $sum = $sum + $x ;
    // }echo "1加總至10的和為：" . $sum;

    $total = 0;
    for ($i=1; $i <= 10 ; $i++) {
        $total= $total + $i;
    }
    echo"$total"."<br>";

    echo"<br>練習 星星1<br>";
    

    for($i=1; $i<=5; $i++) {
    for($j=1; $j<=$i; $j++)
    {
    echo '*';
    }
    echo '<br>';
    }

    echo"<br>練習 星星2<br>";
    for($i=0; $i<5; $i++) {
        for($j=0; $j<5; $j++)
        {
        echo '*';
        }
        echo '<br>';
        }

    echo"<br>練習 星星3<br>";
    for($i=1; $i<=5; $i++) {
        for($j=5; $j>=$i; $j--)
        {
        echo '*';
        }
        echo '<br>';
        }
    

    echo"<br>練習 星星4<br>";
    $s=5;  
    for($i=0 ; $i<$s ; $i++){
        for($j=$i ; $j<$s-1 ; $j++){
        echo "&nbsp&nbsp";
        }
        for($k=0 ; $k< ($i*2-1) ; $k++){
        echo "*";
        }
    echo "<br>";
    }


    echo"<br>練習 星星5<br>";
    
        $s=9;      //宣告一個變數為列數
    for($i=0 ; $i<($s*2-1) ; $i++){
        if($i<$s){   //反向的判斷
        for($j=$i ; $j<($s-1) ; $j++){
            echo "&nbsp&nbsp";
        }
        for($k=0 ; $k<($i*2-1) ; $k++){
            echo "*";
            }
        }else{
        for($j=0 ; $j<($i-$s)+1 ; $j++){
            echo "&nbsp&nbsp";
        }
        $r=(($s*2-1)-$i)-1; //總列數減去目前第幾列再減去一列
        $starts=($r*2-1); //根據列數計算要印出的星星數
        for($k=0 ; $k<$starts ; $k++){
        echo "*";
        }
    }
    echo "<br>";
    }





    ?>
</body>

</html>    �        �        �        �        �	        �
       �1      ��2      ��4      �5      �         @      2016:05:13 11:19:18 2016:05:13 11:19:18   �  �                           �     �   353051000729           F                 EF24-70mm f/4L IS USM 3373003750    ��&http://ns.adobe.com/xap/1.0/ <?xpacket begin="﻿" id="W5M0MpCehiHzreSzNTczkc9d"?>
<x:xmpmeta xmlns:x="adobe:ns:meta/" x:xmptk="XMP Core 5.4.0">
	<rdf:RDF xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#">
		<rdf:Description rdf:about="" xmlns:crs="http://ns.adobe.com/camera-raw-settings/1.0/" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:photoshop="http://ns.adobe.com/photoshop/1.0/" xmlns:xmp="http://ns.adobe.com/xap/1.0/" xmlns:aux="http://ns.adobe.com/exif/1.0/aux/" xmlns:xmpMM="http://ns.adobe.com/xap/1.0/mm/" xmlns:stEvt="http://ns.adobe.com/xap/1.0/sType/ResourceEvent#" xmlns:stRef="http://ns.adobe.com/xap/1.0/sType/ResourceRef#" crs:LuminanceAdjustmentGreen="0" crs:HueAdjustmentGreen="0" crs:SaturationAdjustmentYellow="0" crs:ParametricDarks="0" crs:PerspectiveScale="100" crs:HueAdjustmentMagenta="0" crs:ColorNoiseReduction="55" crs:HasCrop="False" crs:HueAdjustmentAqua="0" crs:LensProfileFilename="Canon EOS-1Ds Mark III (Canon EF 24-70mm f4L IS USM) - RAW.lcp" crs:RedSaturation="0" crs:LensProfileChromaticAberrationScale="100" crs:ParametricShadows="0" crs:HueAdjustmentOrange="0" crs:HueAdjustmentYellow="0" crs:SplitToningShadowSaturation="0" crs:LensManualDistortionAmount="0" crs:ToneCurveName="Linear" crs:LuminanceNoiseReductionContrast="0" crs:HueAdjustmentBlue="0" crs:LuminanceAdjustmentMagenta="0" crs:ConvertToGrayscale="False" crs:LuminanceSmoothing="25" crs:LuminanceAdjustmentYellow="0" crs:ParametricMidtoneSplit="50" crs:ShadowTint="0" crs:HueAdjustmentRed="0" crs:SplitToningHighlightSaturation="0" crs:SplitToningShadowHue="0" crs:HasSettings="True" crs:LensProfileSetup="LensDefaults" crs:SaturationAdjustmentOrange="0" crs:LensProfileName="Adobe (Canon EF 24-70mm f/4 L IS USM)" crs:PostCropVignetteAmount="0" crs:SplitToningBalance="0" crs:LensProfileEnable="1" crs:VignetteAmount="0" crs:PerspectiveRotate="0.0" crs:ProcessVersion="6.7" crs:SaturationAdjustmentPurple="0" crs:ParametricHighlights="0" crs:Vibrance="+55" crs:SaturationAdjustmentGreen="0" crs:ParametricShadowSplit="25" crs:LuminanceAdjustmentOrange="0" crs:GreenHue="0" crs:PerspectiveVertical="0" crs:LuminanceAdjustmentPurple="0" crs:PerspectiveHorizontal="0" crs:LuminanceNoiseReductionDetail="50" crs:GreenSaturation="0" crs:BlueSaturation="0" crs:SharpenDetail="25" crs:LensProfileDistortionScale="100" crs:BlueHue="0" crs:LensProfileDigest="3F800AA9DE106B9D6093C82E358B2C02" crs:LuminanceAdjustmentAqua="0" crs:LensProfileVignettingScale="100" crs:ParametricHighlightSplit="75" crs:RedHue="0" crs:Tint="+9" crs:SplitToningHighlightHue="0" crs:CameraProfile="Adobe Standard" crs:SaturationAdjustmentAqua="0" crs:SaturationAdjustmentRed="0" crs:ParametricLights="0" crs:SharpenRadius="+1.0" crs:LuminanceAdjustmentBlue="0" crs:LuminanceAdjustmentRed="0" crs:HueAdjustmentPurple="0" crs:SaturationAdjustmentBlue="+35" crs:AlreadyApplied="True" crs:GrainAmount="0" crs:Version="8.6" crs:SharpenEdgeMasking="0" crs:ColorNoiseReductionDetail="50" crs:SaturationAdjustmentMagenta="0" dc:format="image/jpeg" photoshop:History="HASH(0x2aada68), HASH(0x2aadcf0), HASH(0x2aadd20)" photoshop:Country="Italy" photoshop:Source="113801949" photoshop:LegacyIPTCDigest="1526705C69ED67BC468E99A1FDBE496D" photoshop:ICCProfile="sRGB IEC61966-2.1" photoshop:Credit="jsk12 - Fotolia" photoshop:DateCreated="2016-05-13T11:19:18.00+00:00" photoshop:ColorMode="3" photoshop:Headline="Beautiful town of Alberobello with trulli houses, main turistic district, Apulia region, Southern Italy" xmp:ModifyDate="2016-06-05T08:10:33" xmp:MetadataDate="2016-06-05T08:10:33+02:00" xmp:CreatorTool="Adobe Photoshop CS6 (Windows)" xmp:CreateDate="2016-05-13T11:19:18.00" aux:Firmware="1.1.6" aux:FlashCompensation="0/1" aux:ApproximateFocusDistance="2147483647/1" aux:LensID="504" aux:Lens="EF24-70mm f/4L IS USM" xmpMM:InstanceID="xmp.iid:6F97A86EE12AE611B8B6AD24ACF46710" xmpMM:DocumentID="xmp.did:274d3268-0138-834f-a227-701e2ed583f2" xmpMM:OriginalDocumentID="5F0A7308EDEB53F8DEDE5A301FD1F289">
			<crs:ToneCurve>
				<rdf:Seq>
					<rdf:li>0, 0</rdf:li>
					<rdf:li>255, 255</rdf:li>
				</rdf:Seq>
			</crs:ToneCurve>
			<dc:description>
				<rdf:Alt>
					<rdf:li xml:lang="x-default">Beautiful town of Alberobello with trulli houses among green plants and flowers, main touristic district, Apulia region, Southern Italy</rdf:li>
				</rdf:Alt>
			</dc:description>
			<dc:title>
				<rdf:Alt>
					<rdf:li xml:lang="x-default">Beautiful town of Alberobello with trulli houses, main turistic district, Apulia region, Southern Italy</rdf:li>
				</rdf:Alt>
			</dc:title>
			<dc:subject>
				<rdf:Bag>
					<rdf:li>alberobello</rdf:li>
					<rdf:li>trulli</rdf:li>
					<rdf:li>italy</rdf:li>
					<rdf:li>puglia</rdf:li>
					<rdf:li>apulia</rdf:li>
					<rdf:li>house</rdf:li>
					<rdf:li>tourism</rdf:li>
					<rdf:li>roof</rdf:li>
					<rdf:li>traditional</rdf:li>
					<rdf:li>trullo</rdf:li>
					<rdf:li>stone</rdf:li>
					<rdf:li>conical</rdf:li>
					<rdf:li>building</rdf:li>
					<rdf:li>europe</rdf:li>
					<rdf:li>unesco</rdf:li>
					<rdf:li>architecture</rdf:li>
					<rdf:li>old</rdf:li>
					<rdf:li>travel</rdf:li>
					<rdf:li>ancient</rdf:li>
					<rdf:li>symbol</rdf:li>
					<rdf:li>southern</rdf:li>
					<rdf:li>white</rdf:li>
					<rdf:li>italian</rdf:li>
					<rdf:li>heritage</rdf:li>
					<rdf:li>sky</rdf:li>
					<rdf:li>world</rdf:li>
					<rdf:li>unique</rdf:li>
					<rdf:li>picturesque</rdf:li>
					<rdf:li>blue</rdf:li>
					<rdf:li>attraction</rdf:li>
					<rdf:li>monument</rdf:li>
					<rdf:li>mediterranean</rdf:li>
					<rdf:li>houses</rdf:li>
					<rdf:li>bari</rdf:li>
					<rdf:li>town</rdf:li>
					<rdf:li>district</rdf:li>
					<rdf:li>main</rdf:li>
					<rdf:li>famous</rdf:li>
					<rdf:li>village</rdf:li>
					<rdf:li>round</rdf:li>
					<rdf:li>landmark</rdf:li>
					<rdf:li>history</rdf:li>
					<rdf:li>wall</rdf:li>
					<rdf:li>cloud</rdf:li>
					<rdf:li>individual</rdf:li>
					<rdf:li>generic</rdf:li>
					<rdf:li>alberobello</rdf:li>
					<rdf:li>trulli</rdf:li>
					<rdf:li>italy</rdf:li>
					<rdf:li>puglia</rdf:li>
					<rdf:li>apulia</rdf:li>
					<rdf:li>house</rdf:li>
					<rdf:li>tourism</rdf:li>
					<rdf:li>roof</rdf:li>
					<rdf:li>traditional</rdf:li>
					<rdf:li>trullo</rdf:li>
					<rdf:li>stone</rdf:li>
					<rdf:li>conical</rdf:li>
					<rdf:li>building</rdf:li>
					<rdf:li>europe</rdf:li>
					<rdf:li>unesco</rdf:li>
					<rdf:li>architecture</rdf:li>
					<rdf:li>old</rdf:li>
					<rdf:li>travel</rdf:li>
					<rdf:li>ancient</rdf:li>
					<rdf:li>symbol</rdf:li>
					<rdf:li>southern</rdf:li>
					<rdf:li>white</rdf:li>
					<rdf:li>italian</rdf:li>
					<rdf:li>heritage</rdf:li>
					<rdf:li>sky</rdf:li>
					<rdf:li>world</rdf:li>
					<rdf:li>unique</rdf:li>
					<rdf:li>picturesque</rdf:li>
					<rdf:li>blue</rdf:li>
					<rdf:li>attraction</rdf:li>
					<rdf:li>monument</rdf:li>
					<rdf:li>mediterranean</rdf:li>
					<rdf:li>houses</rdf:li>
					<rdf:li>bari</rdf:li>
					<rdf:li>town</rdf:li>
					<rdf:li>district</rdf:li>
					<rdf:li>main</rdf:li>
					<rdf:li>famous</rdf:li>
					<rdf:li>village</rdf:li>
					<rdf:li>round</rdf:li>
					<rdf:li>landmark</rdf:li>
					<rdf:li>history</rdf:li>
					<rdf:li>wall</rdf:li>
					<rdf:li>cloud</rdf:li>
					<rdf:li>individual</rdf:li>
					<rdf:li>generic</rdf:li>
				</rdf:Bag>
			</dc:subject>
			<dc:rights>
				<rdf:Alt>
					<rdf:li xml:lang="x-default">jsk12 - Fotolia</rdf:li>
				</rdf:Alt>
			</dc:rights>
			<xmpMM:History>
				<rdf:Seq>
					<rdf:li stEvt:action="derived" stEvt:parameters="converted from image/x-canon-cr2 to image/jpeg, saved to new location"/>
					<rdf:li stEvt:changed="/" stEvt:softwareAgent="Adobe Photoshop Lightroom 5.6 (Windows)" stEvt:when="2016-05-29T07:29:54+02:00" stEvt:instanceID="xmp.iid:274d3268-0138-834f-a227-701e2ed583f2" stEvt:action="saved"/>
					<rdf:li stEvt:changed="/" stEvt:softwareAgent="Adobe Photoshop CS6 (Windows)" stEvt:when="2016-06-05T08:10:33+02:00" stEvt:instanceID="xmp.iid:6F97A86EE12AE611B8B6AD24ACF46710" stEvt:action="saved"/>
				</rdf:Seq>
			</xmpMM:History>
			<xmpMM:DerivedFrom stRef:originalDocumentID="5F0A7308EDEB53F8DEDE5A301FD1F289" stRef:documentID="5F0A7308EDEB53F8DEDE5A301FD1F289"/>
		</rdf:Description>
	</rdf:RDF>
</x:xmpmeta>
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
           <?xpacket end='w'?>�� C 		



	�� C�� M�" ��           	
�� �   } !1AQa"q2���#B��R��$3br�	
%&'()*456789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz���������������������������������������������������������������������������        	
�� �  w !1AQaq"2�B����	#3R�br�
$4�%�&'()*56789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz��������������������������������������������������������������������������   ? ���"� x�Ii�6幫�!黱�����>��:��Rڕ��L�Ow��\��	��_z�M�)I2���R��6�T�m������A����k6�C��f-��9�V"�NEG\�Vv5+�76�o��X�ju g�<�I]j4���N(�ͻ�S���#�����e1��֏$���U5#.�RQ_�1�qRyx����� ��R������?�5����,S5���fF^�~��L���� 9��f9�rK��� 4��M�w��:|��>^ǽ��>������ �E�Mo}#8[==$d�I s����8'�~x� ����:���E|�
��U@ ( v �U/pw3�y���z�~�V�|�I[O׿��
>%m�.EO��v�Kr�.q�i����v��v���SԑeR�x{�MR6��}0���p}qH��~��r� �� �U��7�'�h,mf��ciF�ڪ	$�e�����V��uO�f+��H�s�=H��\e}�-�gDڍ��vvrZ��,p��!;W�=�O={��U{M�\M�n�)1�K9�O~����� �CN��l��m�yVEbX ���Ֆ��C#��K�ON�8�sޫ��0�����jz��<kzE��6�����4��(���c�֤���&��jC)2|̘�;�@�\���A�4��R[;��&sr����g�nG5�>�$�!�d=AY�:ot�E_�i?�� O�:O�>&��_�>�cn-� p�a�s<��bOr	 �ǧ�'��r{�"��V��JȹI��[����R/�1�h���� 8�.�w����h���� 8� ��sF��1�qF?�( ��sF��1�qF?�( ��sF��1�qF?�( �����pX?��{T1F_�:��q��[~Fs%��Wn�,3�u �d�"���R�''|��ol� j��m��.�S���½;�~��L��3�Ӳ�؍$XrF1�
閆]�u������V�~|h���N��q���g
Ӯ�|��@����+�<}�Hh���}�Y�jmm�Via�٘�h+��s� ����?�Pk>�ѴT���(
�p�P�9�F1�gnNH�@��7�;��#k�bK->��\39�*��z�ۭx�r�Ԩ�7���s����ᩫ�Z�Z�� 	ֱ��W��}4���A�H%!��w�UFޘ��̾*x+R�-�f�>��H��˷i������B���j��<Yc��a��/��S3����3�·���$����U}YK�s�����<��`v�ՏrG#`����S�%*mM�%k����c�����oுV>2�5+˭b�c�(S�Q�p��1��I�5�/3M&�����k�����C�r2�v���Q-�E�4���� �	�s\������G���ݞN"T�4�F��w���'���J|_$��W��6z��V:�m=�9Ǫ-)���U4t�j��䑞1�V�~v������MI�ih'�b7����h�b+�v.)qEv{9s!w�*/%�t�>�7zK�[��د"m|U����<չ�9��TeI?J�q���ٔ�TrE��ө�=����J��⹧ꎘˡsQ̿>O��&�4jÍ��S^/8olV-5��U���OJl��.�V�nw�!�$�;L!f�6
�#;T������);u{�f�E��:�X1�q�� �1��)��w]�����i��թ�w�>\z
�[S���ҳ�lk���o������a�-�S~���X�M<��H�)���ڳt��C�������o�����@��x��Q�֠G4��U����E++�zw���\=)�Ngl��� 4�� Ե'�K�;b��*2��u����t2l8;j�*��d˟�=�
�F�sE$�q��l�˥$�:�f��@S�>�)`��]��t��A�*I��V�6��6��'k`��1��U�xL�U��j����1,��%�����}8�/B�!��E�k2�PKaq�?νf��J����?���%H��?1ۏoJ���OP��M8�F� ��c[����Ϛwڤ��h��[DV8Q
g=0���NH�q_95�V!G��=k����G�_�K�4�����|L��uT��ԴĴ�I�,��2@��L����"pUv�1����[\ț�T�U��G�}J�2�ʆ1ԅw���� &{�_W�RV�������8�\�O�a���L���F:h�%j� v��K���Հ�� v��K��g�K`�F?ݣw֎}� ���c��ϭ� � v��F�*���z⋀Fpv� {�S�W5qe��>�jP�O�j��\��fwg9�����d��4�����ͼg8�jU ���cd�&�<��X0�ҬYj�Zțd*�s���: �6=F���h���Y��	|���N����<�Z��w�u�-u�M$�	�V,X ?�aR�=���8�>kjT�Ԕy$�D��P����*�����MMe~���]&c���aB��*(�yǵX+H-�IZ#��*�6�U�]�w(�;������[r��,�ȡ��(؟J����S���,v��\��G4�#���U���;�KF��S1l�� �G��������Ґ�ݯ_ٳ�T(�������l�&�<[W;�P��� ��Y8���j��J�r�֝�����+	F��Dg܊X���wzՒ7
FL�@=�	S��Q�d�����r/��5q� ����'�O�ʲ�S��5H#�yv�m�a@�c���%�~�?�� c{�H�w�I�-zՏ��/u��R���Rh�U�d%bB�)p_yo�CF
�ބb�R� `?�n��O���k������ݓ��v/��k�c�x��&��F�2��\nU���K	M��ӳ��괿�>S�8��#W�q��K}������G|)_�_|a�X�Q�����ݝ���y�+&u��ȶ8+�p����W��տ���9�P�D�K���Y�Z��c��fy�gfn�|( y���g��\W�ac[��uէe��[j|�2�%�����ݽ:��*7����5c���ҘѲ���}�ԓ 01��d�R�w_�\*@��I�¢P��&��'��%V��#֓Dq��Q�Ҳqh��h��4Cu5N3Wq������E��*e��;�W� X0j6��5(���ߕ�c8롧7b��N1�m�1U����Y�1	OzOΥh76�f��(dE������9�)�6���AC��$���o�7��M�h�Z�zM��oisu#m��UF��M��$�^x�r8���IM#(���ҦQn.)��5)+������h� 
� g}k�JA�j>�Ḛ�V�MB�7�e�"���"1�A������w����ox^��P��y�镦��4���S${���0@`k���	���������]6��?�<'�ꖞd��s�Y�ai�g�ć�A���-���H�2Iw<�I$�N�G�G2I+��ǖ$�I�&�+�p��b�*�Ngiy��_r��i�����T줮��[o��G���P�o�����${S�~���9��>:2�@ȹ�����ȩ�����ڜp��V>�["��W�z|�*�:/�GS�ۊ^��hG���>� �*���� ��"�O��)ƗB\�+=�n�GZk&ÃV�7��M�������j�!X�㏭L��p)v��s�J��}�x���=E)6�z��y@<b�_����ҶQH�˻>�%(�1��$i"��zj�����YEڠPC���ە��zT��A�Jڜz�0��?��ԃ�ޅO,`����w���h�S�ݱR��lRt�{h�+߸�����Ƥ�D�EN#Un:� ^y^ޕ7�lV�Wg$����t:�G$6v?g�H�X����\�g<w���ņ�J�;Sq�:�WB�ݎiֶ�����ڊ��������N_h�eo�:�{m�n��ִM���6��f�cύn�d��8��MB�d��F:�� e8P�*)"����}N��V)2l8��e�'����{�c�4�!݌�kG��j4g�E�osL�?ɫ��j)-Þ���[F�^���[��s��ֻ����m��K�SO�o��K�{\�ˈ���m�y�?,P����(�T�֫N�J�(�V��cR��:J�{$��_���<{�K'H��5mSS�-l��"i�.�r�h���'����	}� �oٯ��<�� ��X�<Wi��%������RC4v�)�J�]���� �� �Sx'��F�y���➥nc��J*���a್�t�䆕�$��"�*�0�&Y��ێ�dʿ	�N2�b��(��l��މn��z�~��|*�	�1ZԒ��E>���ӷw����� �g�?e_�߁|_j����?�1\������R�WS��8`@��b�kW�_� {� �e���?�R��m�>(xVF�$F��'�}>v�cc��NrIw=&��r�Mլ/t�B�g�������	Q��n�VVH# �~���GK6��=*��K�^O�w^���ES+��kNWq��_����J� �i�n��߻ڽ��u��|]�@x��O]'Y��i�H���t�tfG`v�V�A��	8��t� � ׈��o�-�Bil��W � � {d�;���g�~~νD���I��<�1���Q�u��~m��gb0v�ƙ%��:ξ��?�����\Mo��I%"ki��0��w͂[hc��`���?�� �_|Eq��>�,o-�����²�W�FN�q�X\�����&���v3+�au�M����4y<:k&�љ�|��Q�>ea�؎x�>���o͟j�qh��kFQx��=~�Ƿ���չ"���8�k7�4��)�e�B`C�?��^+�ҡh0�ǩ�J�Qh�H�q��8��d�8��fS��T�-���r�W?FT�|�㷭>x�����p��c��٠�+4xU?ޤ�Zeܘ�Ū�ժ9s�����|?վ(x�I���O\�n㲲��n��Wl*�nrO@'�Ma�۝��\��=k�����7�=��<1g��G�4?��đ��4�A���Vw�g1����V]��H�q�+*�Y�qG,�:�-ʹWw�]��G���U3J��n�/�{#�g�	����ƿ����
Ү��h��=�ӌ�5��4��S�F$��H䪂rs��o�*��u� ���u��xGXV�<)|�w�,���1 -��)���BJ�?q��ି ����Z��lP�I��h˔!s�TDݷz��;��� m?�� �����z����|M7�n�V�4�ZT�6�th�Y�+D�	,l�r>G���J���^W�G����K��]v?R��w�%F�Z����oF���u�c\�tǭU�=����A��>x��t����G��[Ǫ�{XIip������C"2��� ʬG�P�+��T�H���������z�9ћ�UY��!|��z�a�l���U�B�����N�p���SهJ@�ݨ;Sp��ӈ���Ӽ��駵�$�����H�� �M�W���o��o�+�m^2M�+���ލ��֞�S���9�ݿ�4�?�iU�4��_J�Ȗ2�[Ҝ�3�x���4�#�	�7�?����$Q����4�RA#���z��� �h�3>����u��Q�krH�m��c�m"G1���$3ov�_B�2\��e����ڿW?��qxo����o�|�jf���6�ֿ`��<OG+Z��O��8r
��6̱L
���e)%t��U�Ϫ�f��������bb����~�=��KC�G�û?�?<]�{=J=r��z��o��yk3�i6ܝ��A�	8�c'�%@�u�Z��5��>#��|��Xt
�Х�r�,��4e��H�3yh�
���!K����y����|�W
�M���On�]'�}6>[0壉�8I4���ߥ�ӹ^;|7͂1�5b8���G^iR�AWw��x�ƍF��oX�!��[t�KG�*�@%���.I8�<W]J��i�����ά�)&ߑā�x�iZ\�����q4��G�w8<$�
�n��?����?�%_i�/��Eu��\�ډ�UnQ�ڡx$,Kg���؟ῂ<X���/�kE<����5�5 )�@�r88�+�����tܭ��'�����~�T�gZ���Vm����Ǐ�����ߍ����YUb�װ5�2	@� �cn@�,U~j�������~�[����P�5�!odK�����V�m#��8= �O�����Y�A�}G�5�3���/�D��m
k�s.4��_���^� 7��>�+��ޚ�������X��Կ������Gc����n�K��eT 7�B�6�q��
�Ǿ*���5��$[G$��9��qFkʿz�W��jvT�~1=��"�xA.�n��A��γ-���^À�1�# �AA�'U�e<�O��襪�vg�Z�R�i��d�vg�'����x2r8����<���͜ :��u��VS��Lt޿�ڴ�,���ee�\����g]�z�F�Dk#9��� 
cF�s���l��^��{O�9�j��o���+�/�t���u)aiģs�?�JTq�neʆ�3u	bqRQ�z���}՞�]������h�I�_�컷��?	>	k��@,t���}�ī��s��9
��s��x ��G�<!/�ߣ�g�K�(��O��}���m��~Fy�3�3��t�1G�\���? ->x�O�z��{</]Iq#>W�v��;�J�4`0�?������6>�L^"���X��Z�]ਉ,ne�������n�����1��GN��F;G���k��-����o
�'��Tju��輣~�{�M��'��=�?|M�OĖV�g�L)����CouZ1'�9Y��*T�ǈ>#^x�⮣�//\�d��o4�����!%[ݻ�	F�j�o�����T�4����~���]`֦��ͤ���d����m���9ڑ���o�� h�ؓC��~���PG�x��`��-4�"���S'��@�bX�o��q ���k�jFq���+W�M���Sqsr��(��
)�����z��[���H��R�S,7�� Jl��"���D|mV(���>� ��^xj�_�@�ǋ$��^�	v���{Uy<�?걺DvL�.�����K�$��v�汫\K��w�����xM����+�P	N��_���4_�qx�Ğ�E�n�I-n��O�ϼ!��qat�L�!��3Qѕ�جu��ɦ�|v]��Rt+E4� ���W��i~�ͮ���֚U��v���6�H�@����뚽?�?k���'��(°����,��� h�>-xnm[����ZT"�/a`�Y�-��
��nA"2����������֑4m�'̏.s�LW�R�F�Uot� �����eE�>��_#���զ�m6W-����*��*_	�Z�Ψ4�5@���`E{�y� w9�=+��Q��x>�I#�qf ��ӷj���q<I�F�h������3Q��g<q�G�^��>����h�5��FѦ�m�� 1+��݆=@��|�V�)|U�2�=��2kV:旦�k��%�#���b�C�y#�+�cS����y�m��������?4�~(�GW�u+{{�[�V�D�4G?t�`U�NpA����s�n�w�}S���G��eLZ��N�5��/��C�%���xFܮ�I�{g�ؿğ<o}���ɪi��h.4�x�݀y�=�\׍]Z�e;�4m��GV�0}ֿ\�ק^
t�h����	rVV��@������$�+��ǷYqݓQ�lW�n>���gb�)��Zh�9�:	�T�)�H��W1�=�dU\�����jk#*������خ˷�r=���� ��b�>|>��~%��ZH,�e���(am���<�=q�\��E<5W��cv�$ta��1cB���엙�~�#�'�?T�ʹ��xc�dH��̐�0rH�C���
�S�ze��.��Mqi�\��'��5ơp�����ɶ�F%�!�,��3���|$�E�%�n���f��- ��l�pL�($*�d\<N��Wƅ��{���Aa�"�]`�7S]�'8g��7�ApN��[`9R��+������k�u��#�We�o��l����%<�����'�� �����z{���q�^M�x�o{�E��5bN���ʋ�U���r�t?��'�(���]�<����?�X�C	V%T�2�P��:�*��c�]y��?��e�_�\�m>I #lhQCX�TRvo��]��l��j_ں]�ܓ7� Kr���L1��%$�����B�rV����8��d���<us}ck� 	������ދ�є��.�A�@� 7(�F��y�� =���C�糾�����C���8 �?�~�j>��Өj���	��aq:\O�m؁���(�9eX�E݌)�������<g�I�;W�״�-��bk{�Z�U.����`�����P|� �p'}Z�˱r�ܾ��}=���>��g�t�;�y�_i��W���OAI�~�L V�y�������U4~/����"��/Z�G��|۱V�q̿6[h �q�4������n�yi���3�3�֯���2�źt n���}*�Mu]�4;���0��L8� �SR ����J�a��������9�KZS���إ��*�t�C���R���G��UF�p!FQ����QYs�~t�� �P�� �V�VAa*��t���?�ztv��͑S�pW��ETcvD���[x8.zW�'���+�yi��Z��լ��e�Iuh���4j��eyZ �;x ݒ���_�f��f|v������sf�U�v�M.�LGv��O� <G�q�<�*�~|3�|/���t_�-���� k�X� 1%����1�1'��8�C��9������۲~G��.W:��:n����K�?�?�%��e�`��L��Ο�ܾ��yQ1k5��]���?Ѥv��!��n@.y������=���m��7ʏm}y�]�f ���q� /c���?h��w���������sGiR��Ō띳C !��YN��#2��_�ɾ��l+v�%���X���ª/!
���F;��0�}U�AG������Z?W���OW��~�<D�+K7��n����_
���?�-��V�ƚ��h�U�!����<�9$dr1��C�ޓ��>�`��ll��x�E�K6�0"/
��W�W�B��y�I�������
��>��P��!��=�x�f#�����%��a��0����G�~�O`��c�T>E?�Yz���!FĂ6a�u�=�W����Pկ-��mc�.��f[���@@��u"� �����'���4��z���i�Hu+��ӣnr�*�0`����c>mz���$�o��#ң�~�K�}�����K��5-SP������5���(!^��1�����
�K���-�B�� �����d_n}�;~��'���W�׏�!x����:���[�x��i%Z5�n��vͽ���!wm �U�� ����a�v�i��Isp�_�I�C�;������͂8��e��U�-�� �Z���R�֗�o�������?�E��V�\!�[=����3�'�����_�/����7�e����V&{�J+H����}����\�������<E��o<9��Jo�5���)]�e��F�=Q������L�x_C�f+$n�ɖ` q�p08��d�hST�9�Hp>`>��?Q�V/��N�]�v�z��27	�Sר�����by����jϘx*-��w�)�Z� �cxSƢ�SV��u@?�^��� S�O�#�5����5��u�ң�>Ly�Vn��m�����iZ�p��I�Ds��Ǿ8�J�C���c�Z�e��W�=����2�0����K����we��s�r������?�π� ��t�GX��P���Y��f�Y	UUb�J��~��;זxcĖ�(ҭ$�X㼻�Y�����<�����9�_i�G�<+�|-�C:֜�֟�ڴ�2*��Y#Q�e'��wB��� e��>�W��|I�hn���P�i�h� f�����p[�����4<����!W'�b�O�R�*S���(��E��s�R���G����gT�;����P���m�-���G��徯�d�?��m��P���V��~��	��My� ���3ē0 H@s��ӏُ�_�gï�w�ZW�"֯�&����=n\ȿ&�P�&Pwc-+~��g`i��� |5i�9<I�|��s����E�ي�[�@0eI^` _�!R�v�r�C��n� �B�����v+� ������N�j���uߑ�U*|�?<l�X�]�k��0��=�"ʚo�
�Z�����oO$�>ÆxS���8{�������v��Z���о/��>�,�n����x�ą�Y�&���RgEv{c�^B���-�	��Z�?� �H>+i:���I�xr��khm��9�A_�c�X�Ϲ�B��L����Q}v�����t=VUb�Y�]\�dD,t�������M��J���NԾ���p��ö6{�6�w���x�ao���m2�0�����;��H�т���ϱ~� �I�As��6z֏$�^�Y�k7vrx}Z)AP�,P�E;b�#`�ܗ��>$����گ��oI�{I���I.�:�b&GM���Oˁ��叀<C�|I�t�ڋ���qmq>�x���E[��k̓r��_-.�t�}�� �ֵO~�ͫk֭��,6�N�.5Ke�c��n�3|�Ř�*c���Jm�fx��UH�y���c�� �¿� f�O��aI��`TF�v�ҭ��
��l�W�#`9!J���l�|i���ݿ�]=4�mZU���Q6�hN�����υ�1��WH_��������o�E��o��{_��VEf�0�V�.$FI1��+�l*Xwx��Oٻ��H&��� �O�R�c�.��-��c<RiM��!���G����0[h���������&*6Vm}���>7�|E�xGV��I��Q���RK��n�S�6֝Uɘ���ϒ��۾��o�O&���l� �֦Dia�R@f�X)#>�����u�����W��/xN�[٬���ʉ4{��#6m��+9�@�W��~�hO�^;���I����JY�"������ �@B�5%�2����-/��|�̱�/o�u���<Y�^x�Ւ;f�YN>^~��� ��oj�-����>U$����
^�vM��?*KiT2����I��<�� �t.�e�]e$��Ks2��ۗ��z�������w=O����n��|'y��}�?6g��e��<3`�G$Q�x9ܼ���zf���7,l�fVbz\:��I�E�w8��VOKX)�KS+���/�:C5�>dk�7G��~����b~�G�ɨY�Y����Ha{v�1,[-�`"�0	���ů��/��Ϯx��i�E�G�2���H�#EU噘��2N $|��G�Q���~2������. ���,�5��f8d�Y�Ph�Nƌ�7sՀ�	��9�ߒW�q�,3
~�K�{]�H�f�j�H�MΝsk6�c��[x��pF3�*�ܩĜ/^��L��oZ��S��6��Ba�.F�Y�Z�ʰYB���y��G&���7����'�CP��<'qq�ב?��gm�#�K#G�0BH�
A�����ĺ�_�ҋ�n�f���O������1eM�?yu�kE����=���S^e������W�I�m��V�u(�d��%���M�d�H ��V#�Y}���S��J��v�Zv}�����Ⱅ=�&2��[N��� �?*d��m�z�</��LOOj�Z9�B���^\Gq4�L�*��18 {����ǃ���^�i��[·.�m��#�
��,.6��~�$a0[�����q�����\Il��_�V��-���`��.u_�kn@~���w\���[�~��P���d���l�䈶L�n�h�܆�ܩpɸ9�'�N(��o�+�"���K����g���Q��įzK���{���z�c�G�u7�t�JI5x単k�AE3=��$W�bʛp��2��RM�h�c����r�.�;����g,$��D��|�'�����8Z���?�K�xsΛA�4[϶H��u��i
��[$de��Q	S� �2[���� ���'�.�i���2��f�e��+���/�%̢]�"9.���	l��_�K5���=�7�g��!��\�muy4Ekul�s�7�o4�BbW~f�?���n��4R�"`��_e�.�����4�j8���sv5+��&vGb�1����s�W���K���_�h][��ٖ?����8{X=F�]�f4�fyUC,�4D�0+Y�7�+�� ���Cy�Mq}ru++8F�g��M�h� t�n��}���,�6������NDx���j3��5������d�㽞s�\��n���P�7��X�<G��v[[]6�O� ���"���X�+	6e�:�ʳ:>ku�+B�w��Vk���;��Эգ"��Đo�Y$h�%DJ�r���r���Y����hz�6�V���%���O1ٚ�-5"-�bwM��1��")Щ-���ܩW�tl�����Z�oY�Ś{t�Zeԭ���Yt�r@YбRQe��*$�1��k�� ֯؏�o��_�A5+�r�Y�m4:�z����F*V3>b�)�2��l��
���G���$���o}�M~��°��Ml���m.BF� �U�NT�ې���\Ɣ���,��t֏~eۯ����'p�IV��\��U�}���Q�k/~x�oe���x�_S���O��f�H��R��Ю8V��<ۈ�]̈ ۅ$� N+�MSM����C4b�14�D$��� �F}A�Ұ���j�t���*�Z�Ʋ��(��?*h���}j����K���Q�wd�u���ѕ��T���I�_q]���r�HЎ���b���!1dy2[
8�$.G<�W'��xm��qQNJ	�_iMِKj�%��[�Ң�q�kRQ`��۴r�ɪ�[�/O�_+���U���zu�����`�h��^�B���zE�v�R6��:;r[�SI��1���j�g���+�lt�.�K�CR�-m�|�H�j��'� rI����(�U�Ƭym����z�{�W�=-t
7�.i��ڇ�uVH �Y�kS9X���eeY	�U���wK)¼EM[�.��������i���-d�//>߉�W����� �-�<=����/�:�}��O����+"E���Wk7� �@+ּo� &񿇭�;}�~��O:��K��U�Ե�I�i�h�6߸
�?Ğ�m��}{F���I5������襕B�l�Dd��(K�YܨCZ��S>�_��;��̻��ԑ2�d[x�QdIP �>O�?��,ʾ.�������~G�-���4�e��ǌ?�_,~�}m�40�*Kqb�0x䌒��I�>�9PR����^$������x|ھ�t�Z��0eQ�1�D�=x�r+�-;ⷅP[]ii��>��������I�Pѹ��'���U�� 5�ZF��_xGM�;���4��oq��nѺ��塱x���,�b�q��ˍi�T��c�=J�Eۡ�ԷJ&dyYl �v��0?P3���ü�&%\3(����\��9��O#h�&[[����Q��O�$h���쏝ģ,XB��� ���U����#^i�0�;�a�[L�v�nRʻ���Cr �����ST���� �x�a�ꯇ���?����&��[�t���5h�R�lp��Y�y�����+��	����[��ֵmJ���jm���n녕� H����	#���k�_��0���[9b�(RŎIb3����kk�;�fկ|Hf��Z���f�~���U,�������#�l֝,;������g�kwW�*I=Ԫ�#l������Oz�� �{x�][�K�1ȳ=����,�7����W�\S�~f�� �� �_��7�$l�2���p�$l��eF0pd' �s��lƝ��u�׫�}}O��=yV�r>��Fk��/���wƟ'8��� ע��+��=��mǙCi�v�2~��+���̏�|-�Z|E�ݞ�o�:�b�/s�YU�n���N�0
�!��l?	�����$ך��?i�L�h�Y``�ZL.��Pd�����~�P,�/k��O֗m������9N"ď�U�8`��Eo�� i_�� �&��-� ���N�!⁣�)dIW2m�2ŕG�OH�L�>�
1XY^rKtՕ��OK���o�:�Z�����G�Ï�>���;}c·���\@% '�4@�4?<y~x%�nFA�l��-?N�/�mbH�������?*4B�z`H�z�¿�N�f���t�d��L�Yd]�^k�PDFU�V)� >�! ���jK���x/H����6�v`K�I3��M4��0�����B�{s	GD��n�go+�	�y�.�:~��O��?�'ǽ{�:�WV��j���m}��l���<e
�2D����&��>^+�����]�m3��>��Nյ��If���v�w���f��!$ ��ʅ�8� ����U�i6>=�x�U�8-�1i.�l$b��P�m��hC2�o-L�>pN��5ύ�߳���xk�� <=�x�V�F�D�Wv�v�
���X쌑12d@H�b!?-��Ɯ����������{ϖ0P��C����x���������J���ז7�ku��a�"B����RA�F�+�_�4~9i�._'G_�I%o�i�o{!�|7�DWR��u�m��Ov��� 6��g�������XG�]�\|@��>�`�+B#������2!�����mj? |+�[��o�mcOmN[{�nt�R�I
��r�����\���T���h{Xi�>R�� �X|p� ��)��z����s}���l�
�4����22�a����.|d���m�8m|U���]���SҭM{���i�����"@����h�����u�g�6�V��=K��zm�Ŋ�'K���VDF�� ��T� ��U���Na�C�����{�Q�l�O���+m:�h~�8�FR3-�&f+�H8U2m��y�n�o롷��k���Ϟ~� �3�� ����|}��Z>�1,���}���P�Y������B���>��Ǉt��
n#��u�h��f�G��hb��4��(�w,��R_s)-����)�L��� �'Q��Ýk����@�i�e�G�)H�P�<���H$��`7I_4~�a�9��_�>.�i^�w�$��He�-�a&�W��D�VX�&2�������ђ�w�_����������nkz¿�b�P��'ÿ�dZ��3���c�D$x���tS�Sr���|ۮ|��[�}7E�mt�P��%KX�����E�^<�*��;̒v��*'I�Qx'��>5�V:����&��K�������8��h�C�<g�$�QB����������)�]'��3:��Z��������y2��*٣ڧ����0D�%IFZMٯ�� ��s��2\л����ĺ��.�o�u�Jᮯ�z5���6�,�v�g�>rNL�qa8Lo��Ǚ\�~��6�5���d�X�it�CL��5T�
{-��X�c �`�u�~�� uMC@ֵ�]Y���ҍn;Qsj��$�@v ��	Qc��xUt��ԡ��{2[=���:zZ�6��Pc��$�q$ᔅB��Tń��Cx٭�x?�=���K?���O��qx�bH�R�&�m���2�/��0,$W���Q��K�#<����k�s���8���,j��[Zx��� U�R	!�����M��IQ#��&U�w1�S
��џ��'����m�±Cu�1��|�L�F��@���2�;�.��g����� ��k���������g�g�%��ŴU����� �|�ϊWLO���6�أ�,:�˷�z~���t�Ҙ�]���k���Ƴ���m�᥵�F|�ʰ���z�VD����Jn&:�}���g�ۑ�ns�=?�\#���H�ϯ�~..�P����]?[�}��G[x��)�Kw��^��Wb	a�=�X[��՗� �P����jk��v~����E��}����1��F�|�����*��䦯�Gk^'�emAmm�\u��-��x���&�3u!y��U��7�=�>_�q־w��Z�L���MI}ܿ�{\?�Q�!5Oh5���ө�� �n�2��Ԯ�ֵ�{r�->��԰́#F~y�[i<Gs�
%�l~�^(�8V�mZ�\�`�J��3�B�t���{:]�I�{-���۔�� xd~�p��΄�� ���;fX�m2y#fF`���T��dc$r+��QթU�[���<��t?�/�q�� uƎK�X�g�8�8������r~��5���T�*�"�g������u�A�=aKo����_�Y>U��a#G	��umn����4�ⱓ�����_$�3X2���+��U���Ǻ��H��V�RMBn�gϨ,ވ�I f�4?
_x�W����v���lG���$���d�<(�_YxS��?�M?O�}�Z��!��y�Nt����JVY�x�bc�G�'p�>����,��h��T�uu�� #箩3�8�^i������H�u~ZuC&�s��I]K÷l|����Ѻ5�r�(�;%b�F��X���p�ZG�4�U����ז�����ݽե��*<K�O���Y"�HՂ�\MOV��7�-��o5]7K��s��	�i�Av���_��� Y��~W
���o<k}�e�ZK�S_�4�e���k���"���M��06�@̌]$c��:��?����Q�����s�%���x�K�|C>���>�	[���u2ݬlb\Z3#� WdI����j�����GOh���8n�����b0p��
TT��-�����s���\���:׉�7�ZizIqo ��Hܥ�!��>b���e�FC�_��o�� ��� �o<Q��3�]��Ea���:\v�*�����F&$I�W���g��{]�����#���Bk����`�1{>^�l�h����7�4[k�s5��Ƃ8��&XT�'
7���sn�d�������/�����֯y��l�ג�"�=���)#1�ͽ���I/������ٷ���a'�8e�&K�~� �sB>F9 w]�N_#��5$�n<� ��D$�ZbA�c��|$���>�x_��O	5�����
�\G�}���b�s2#���cS�) :��8��D��w��.���"����$��k1��x�"�ӴR��6Efy�S&�;�|��q<C�������*���ƛ�k3\�B%/�l�+|6�B8g<�"Fj��Uq�-��:w����|��	<Y�_XmP��P�Y���i:�=��ln��l�d22�Jv��zO�?./5{�oK�����[��dY�X�Y�7w�2��DM�J��'�+�.��x���.�ľ�3�Vk�2A�A%Է�]D��:'�����_%�>j_j���}�y�7z�?g��d�D���,,���Q��).����M�E���ci�	k}��
�C��Fڔ���cy4׼��Ѷ6VS���py�_7�z~���G�m��{v���!��4`�h�۷ym܅&N�+�	<c�� ������'�f��R[^i`�Vȶ
�#����.�@#	��o~7���]����jV(AF�!l��=ڿ{�b�`װ����D�e��O����\aE`q_�w�֊�vO{욿�cо9��:7��kv� ����acs�8Y ����p?�������9�n��F�� �5�����ZA�����r�q.p]��
��In޵�?f�����4� �j!�ȹh�d��3dG ��<)۳i#x1 z��P�e6+��I�h�u��v}O+���Җ#�J�4nM�-��of�����Q�� jurf��9 `��ҲL{����w����Z��ۆ���I嘜-���\�P����8!B�n^����H,��wK$n>�%�T�\^r	 ���mǟ�)S�������\�rr�"}o7� ����=
B6��~,S�ڜP�zY��i%���ˍ�r��fg��Rxb� q\�F�r�}���F�\y�vv�����W]u>F��FJ\�������<
�T��W�,������W���1���F��
|q=��S�wú׊u�{8�k���U�N��EgR�)�Ԩ��}���֚�M]�]Y��{�Ǐ5��b���3�<˺(����hf\���w_e��t�7Қ;�F���+m��S�a$($R��bL|�,��(�>U#<��DZ/�����i�v���n-""����QD��+y�0�Fdء���C�� �`�t�c�R�M_�`��=�|�ZH�do�Y�����G�w��\g:�4������e����|�^�� Z���^K��v�i�yx�u�Yx.�Y�i~��ZI0�a�I󣱶���Є=�['qm�z��4��͡�Vw�w)m���&����;�f�&mu # ���Kn���Eu_k�Z�GJ��x%��d�-n��X�ծA �d�����A;Fn��m&��I��R�_2-*��8��X�%���o->���z�p5�R�D}5�~��<_9��n��U��o2�����s�yr�imc*�� �*|Ď���E���\�v���������)qpw ����R��H��Ą|ʪ�>��w�^_G�/h�\F(��)5m�s#*�$>%.FBȘ-��W�O~Ϛ�ǯxn��E�T��Sb�C�B�y����X�d�Wvr��cYF��r���C�?cO�#�:�m����H��OT�C��"H��r��I!J�̢o��p��� ����u��hͦIm!��W��V�ѣ��)�
6�J��
���G�� X��z~��i���^���Q[�{pF�9;�f`N[$�����m}�>&Igo�� kY�\-��xk̣!�d�l�������@^�э(�k���I�v�����/�&�/�xh���փo<�m��7PX*0�;~�h��Wq��u%��?��җ�p��n�u��e�R  3���} ���:��&���W��i�(������m-�dI����D�CG��p��%����g���櫦�%ׇT:��K�\hWk���H�Ŵ�
�( ��2�)�c)}WU�-/��Ѿ�o]�b�a�������zۥ��.�[zm�Yޤe�foA�����SV|�e���_�b6-�*3�8&�x?\�+�"�a����_v����D���\(�^�f@��q���:cnFy���<���~h��#�	la�}�.�|�Z��h��ԣ�m� S�1w^I������?���5]>��V��z4�0��U��5g2N��8�]�嫾񄺕���vڔ�����G�2��F��Y
����p@V�5��	y�����9}GY����mL�XX�@�)/#:�A ��#�}a�*��gmN��_���]|��I��}&�Z�dt�[����vS�7)fo���j�N�㻷����MOJ�\��.�{�!~�~8յk��!��Z��m�KT26y��z��W�̈��aF�|Xӿd�5������vc'�ḃR�HH�N��oc\��a����'c>u���׀��-bX�4��L�kZ��h/��ni���u�P��0�,������:��=֯�z���z_��5��k�V&U��aAX�1WP6��jT�(��h��n������-���Ϧ�������o�Z�j�����چ���k�t���L�#H������n"YfiAc�*��w�|[��� �u�4��x�"x�Ie��
Y,Z>Ӊ.Gѡ�X��!q�{���"wO�᷹�n��5�D�/�-'�H���d�[��a�BHb�h���Kⳣi�,�v�m����M�Y�o� �9��zIȥ�e�<1۲G�lc�R1[���%}﫻��ɽ���Z5�}?�ϡd�������5���G�{�1toK����ŭ�����<j�Y��ɳq%�����'־>��*�O�-f��51�K��$�N�ϴ���� c�oD�#T�+��#
¾A��s`Y����H���i� .!�.�9��ݑ�Le�o����܏�b_Z�/��� ��(���5��)Z=n�h��,���r�YG���Hu@Mua�)��OEv���m���MF�K]�� ��� �� �����Z��=÷��$�܍gkm���qv��s�,{�Uc"9P���b�&~ܺo�f�?ᩗ��z3�y�G��zdqʋ�� �b�n�d�D�+*�����l5�� Aw����K��z����W��TB��E�IC��-���
��Ϭ����]I��Ű��B0i�j�� UUt�� ī L�JRrN�����aJ�b�z���S���&g��]�5��#k���-������Ay>o�ӭ��,���-4_"�x��/�w����� �Vi�m�;����>94+(gM$�0�bɩ�)-
&^�VH�U����.> �=�� ��u=W[��|T�� f&���h�K�����I*ye�t�2�����|E��}�B��K���v?<H��oe����QB�#Z���|�"� ;�'�}G��Zw[~�{+Tm2���(�$�6p�?��KNR�WIҮa����Fc��[�Co�%��V9V]���zT�jp���b����~0��3�JE�\�	���7�2�k#�g��μn�<Au}�Su�ꚦ���e�@c�퐬s�Ll�j�b�)S�$P"�������:>�g��n��&��][xt���i�Xl�Y�2yrm ��Q����o'�_��W%ވò󯴽6���~���ٮ�k�x�PFH�."���X�I5+#�6m�#b$�	����-�zƱq�;��{mNK�_�<�U��]��FT�1$�
�� I���� �3��q�\ٕ���Dx�5Y��$�'ڤH�9�2�
�)�M���/u�k��������~M�΄	��F0F�U��S��ЕH5t_+N���]�	u��@�N�mc4��v�grmH�`�ӭ�on�E�Y�,�F7ԞoZZL��PR)Q&���F�X*��?�w*���A9��b�	���:-���ai��CŚ����qu�I�D8�C	�]�9{���������7���f��{9c_��d/�|�V��H�0J2Q��.�<o���L���Lԣִ=ȦkwI�̊�K�w

�)���^b *0s�lW�^#�V�I���;�;�>��'m!��o5FA�yXeth�r�r��q����_[�}�Cח
pfY��n�E2d�!*�IC��=
��|yKN9na+W�/��W�e$����Wm����'U�T�e�F�7���۷���m�vV�	����l�v�L���(�'���+�Q�th���6g��x,�z����u�Ez��3yq�������?�+�G�lm$J͵IR��#0�������ָ�Z�������vxG%*X�X~R(��:�D|�l���cבמ�?�X�3��[�=Ɨ#i�o_Ȓ>T*0`�KC*G���]"XX��i&�~�v�:����Z��-�4+y.'��7���Ϊ���|��8�����L�zq�Z?�_�:k��G�2+$��q:���fpA��l��t�5iB@]ē���^��O�%��� j����Z�=�牵K�7�h����d�X�
#�	?u{��W|1�_Jҵ	!�����eqzu�X��W?4q����1� �'�&a�yN[���59��F-7{-%m#�_;'k�`x#5̱�-M���t����n�mv��|��!�V�}X�!����YT7�n��E��@�`�Q b�k"H�t���SZX�-�����/u[�F�sZD�,�������V��t�3Gծ������I���+}ɂke�gE��H��cY|n�y�p_�s��h�Ce�Z��������u�̳��h�<��K,�E��Ku(d*��65�ٶ#2�O�w���.�y-�� �?�r̻����+F+��V��Vt���C��;��Sq�cQm2�_l���-ۜ�"���	��?e���?�<K�x�Ʋ�_X�/�n������J����U�˄��"�	V��y{J�y<�+���/|j��zV������P^��qu$V��YRg{]ZA�6PL� ��8j�7�Z~��J|`��rn�+�?�Kٵ�S���$�d�^����\���Q4�́+��5{����u'ee��� ����~ �hoX�3�������.�Ŗ�R-��$h�W�Q4!Dj��*⯀u_xO����M�^�d�/}d�}�����"Ӛh�B���2���7%{�� $��|+�[�7T�.�oq�����8Dm':��ݼ��+'��+W?o�����f��|/���A�=���~m��ɏ,%����E
6�܁���4�vr��O7՘�j�����?���;Q�f��y�xU���;h4�؞beA��>l3y{s"�
�+���/ⶥ<Ϧ��}&�;������i�w��ۙ�T�fS�/��(�������V󨷌G}�\C�y[|f8�h�<����Ɛ��h���������-u�Z-�"i6W�wE.%����fRP�#F�F�ef�X��jͲ�NT��M� ���N��Ŕ�>em87�4��Q4p��Ȕ<꤫�.��]���=¦ѼZ��PK��/M}y�[�'H����6ڶ�`�����nn̌Q@S!޹���_ů������֛�Fe�.�:Kb1���ei�$` �7d�x����]�]F�h6�Q"%Φu+E"7�W+d�)v�H�dj أ��>��ٶ�eI-l��n��]oㅪŦ�����WO��H'�.�m�5�@��+�0ą�:���� ���7�<��O]+O�n,e�M�G�����Zjk*�Y�7&�Q��X���2z׋�kύ�
�������S�~�WQ6򡾁7*�Mw��UU��?��Pȧi����J�<75���Ι�M�լ�8#y|�6�	��i�����P΁�#�J�����]Nu;=?�/������>�ZYMooc��.粹��Қ���+�����d]��`UU�x;��� ���m_ ��/��X���R�+Z��w��A�<�0Xĉ<�m�h?g�ԟ�t�7e��5����i�M$:�DDΆ���pv+��FK*�Q�e�b�Z�>�ƭ�{��}V�T�6�sy��yу,Q,R�tE2'��" 2p�=n�
�6a� e�8�_�_v͞wdt�l�����?�{?�G���[�Z�[�++Xq���/����O�$߇4��Q�U���i:�q�~dQ�Y�p���5%C��fA>���'�-C����.�w,W
���*���X�Q�0�#�B�e�*��5� �;�� ���y6+xrF �V���$s��n;�J�jX�-5(&���ݵ>��ԣ�����(�i���7���t]O��?f�t{=".I6��$�$� �I��{���D+���v�v(� h�g�*�,��Xc����m YN�Vu��Xm� ��9�_���>�I$<��׆��� ���z�\n_����fp��g����:�?�⽺�`u�s��g����^n>���Z��k��)����7�|Q�ѝ~�0�ӗ�ʟg��6�M��:�´,�Z�e�v��S�5,�� :�j���"�0�n���:���:��6�E�ٟ�v���I݀[����dp��Y��pʰ1��zw}�f_�G��h��F>�d�gkv����G��0�c�������������$�\�u�Ȫ���U��)��RF(3�w�Oe}�º^�����i����Ǖ������,�������<�����Ooyl�\}�c������j��T[h�\]ጜ,(��(�����q�lZx
ZG�[���|��۸S�p�7d�)���[~_?#N���k�Z�B~�
x��_�Xʀc
��V9i�&}��
��}���a����h��s,r�ֺ6�uukɞW�"�R\t8I�J��av�W�ּ#8���ͥM�_3�wsg�/D�C��۽���ǐ��RI
s��O�g{�xe��'\�����K\$z���Q|�y\B���RFF�~a����JL� �~�KC�]�������^�żc�ݖ�s<i$�D����L�Ȟr��K��TZ��e�C�irx���I(���T��7�\���6�ʣ"��J�6���O�f�C�6�*�'��p��i�C#K�0IU��H\,?	<u�����I����I��T���i��-��{{tU��ml;ol��P��a�����Ѭ/a�ou� ��8D��Z�l�A�M����K�J�@pHP潋�0���/���?�]K@��xe�ő	�1� J�B�.T�d�I*[hm�;k�խ���E�]Gkf,�@o�ńDrfGB���e�[q�,쁵���m�+mnŵ}P�ݟKno.Q�h3��%�Eث��d�r��ZQ�9o����y�ino��B� D Q�9�������
�(�|s���_�Yh��]��1�Y����H�v��9'u}����v��x�M��]Z����n�@I��6s�����p���ܟ����+]B�k'����K&�ԞC�ިl��6���?4JAR�>�"<��<�垧�~�<c���C���ǈ,D6����}֍d-�9'b���@�B�?��/	��'P����Z^Ի������ }�����2,nXٙ�� ���
~�^8��#����*�~U	qo�Z��Φ6�d��IoS���S����+~�W��c�k:F�<u��-.n'��d���FY7#�퓜�� Ty��vw;�"��~G���oٻ^�f���]�7����ŭ�9bcR�Lk�~Rq�����H+�ox��Y��i���W*�+�s����� j�w�3���E���h��N�u'�q�xk@���l I(��9fāCy�H�l�����M��-y�\I&��4װ�6[y%�/Pф�?� ۖM̛|��i�a�)�/_~��� ��abکK��������]�ͨ��@�\�o���EI�ee��ߝ�,e���w}1E.fa�o�b{{�	���ˇc��P��h���an���b���fx��<���}��x�e���֛kg�@<�;A��0D�ر�Ҥ�y2D�0�63#z�|!��-�i����9�a���CK���0�Y�c���H�'��>�>;Sј�Z^4Z��6w\G�jrK��%�G��K�ZY<�2m/"gyW*�����t%S�RM5}��{Y=��j�k��iEFȥ�M'P�tպ����+;�uyb��E�fE�C��.ݧ�B����t�I��=u��\h�l��SR�Q��7��uk`m���;c,�[��a���woa��>����D��:&���;#�R��i;P�RÆ_��紟��?��𵮩��&<��K�x� �~�p<M�|�G����"Fm��r�<���������z.��q�\�~���� �sx&�o�ԭt_4��ͦk�l����#�:G�$�>fR7('���]��R���m�V��K�1v"��8T\�	õ��j��gg��R\��~.���>tV���uK��͹�M��I���̗��d���l��ԏ����g��c�� e������]\�zm妧�4�m�0K���� }&�Exn������Q������1�)��f���Q�+v蛳��wwmZ�Z��*����Z��A��I,�E�Z�ie��ͪ�߮������&G�++�6ej�k�W�!�Dڝ׌�����s:K���vr�~�ui��"ڨ�p���Ze�ǅ�	�t]_ľ�ᰒ��O�5��,KŖJ�� :F]����XHZs�k^k����5k�j���s{h�څז�n�QeY�V,I�3�0}l�2�$����'	TW�<���I����t�XF���dxK�}fk?ͫjH��Ooqv�:9��FͽkFL@.Po��=�N�����u�^Ц�(�U��5kF�V1����]��6V;��|O�Xj��;�^(�4�Q�1�-��5�[��<�H$�5�<܀����B��>�{�-a��|7$��pɧM�!��v�yr�8扢)�2Ki$���B� K��\�a�����mYi��i�<�=,����4�� �����?��ᥳZY��k��N�������%�a_��f«mk9�&C�e;��6�~�f�u�<�۩w�]�sİ�n���l�d�;((E1�g˷ �&Ӽ5'�":_ß�_�)�q7�5k(�Α���lbYTlpj��\&`)���������o�uM�Ak֫c~DbS
Mos������X�!����QiݯW�� ���4J�_.�}� ���_��&𥞓��}g��xZW�����Ot�8"=�+4{q�wT�� ���|+��S&�wwqk��{q%���n�9Pi��`H��H]ϵН��R3�7�;�;�[G�mu屼2Ţ��ƽs;ھ|�}+���%2���FH&�B�H�����|=>$я�u��4�~]����!�ia�,�M�aYD�#�Wc�__�_��tf��>i�������M!t�|:a�kyv���wn�6�A�#V!�R�����7�7W?fӼx����-��ң����\���p��º�J	�s'�?��i:9��a��4�C���~T�4s%ķv��SV�w`�wS]��{5�״�t�iq~�Z;��S4Y��o4��J�B�B�^bV6<]�_i�:�e���/=ޝs��*�xQma*����y\�0��F� u�趑h�n��ٱ�%�R��G(�!�U����%��	F����WJ��.,c���z}�R���;`@h�H�� �dc�cud�x�,��ZX��@�5htv�D��v�̚m.����7��<��ȪB�z5@�sE.[��r��<�����<We%�c����W�V"K+VWQj�hYdO7s U]w�U �+���?�������z�|S$��mZM�Wm�B����nHe$��ڥx'��7����p�lգcn�A���:ٸG�N�v��fpDj�"�h����=���ue���q6����F ʷl��80��)>Q�������~�������$j�(ׯ�Ͳ�]^k�����
�b�B[�{#,���2���k�x� ����J�_��5o��K-�։������IQ���U�(	nU�+c�}V;����֡gv�K��V�(�lv�1H�����T!v�I�x�;D3i��G�a�\���5�Ԏ��4{~�ku#r���F�5���%�ܤ��W|�������S��*��d��M�]�k�kn��U�l� ��i6�4ֿ��'�����<I��i��hAgm�trJ�(B�����'ǿ�gT����C���O^iw�$��Ҵ�3MYQ_ȢI.	���Ǫ�
˚�˯��Mn���k�Z�)�H�*���(���R���!���#X���+�V����ǋ<Q��?�nn�{H�D��6��cU`�p��%,_g��Sv�ފ�p�2����� ��|7c��>����%�l�H�I/Jڔ��bFi���(eH����N�mB��1�Gh�Ae�<��i�B-��x�sHTAp��>B������s��&�g����\�e�����d�4q-�nY����³�J�/<+�h�'��׮|�X�Y���4,�d�x/UJ���ZM��B��S�
Z�]����-#�+�;I��ui���?�	���)l���E.<�fTr�pw��� N�5�}z����b���m`���'XGqf'i�:n1K̮�
�~���:��uf����Y5�lm��_�o�Z\F�[1��3�:+^ӵ{ƛ<?omc��#�m��:aP� ��l�X,G9r���D��>��1&��G�m��41�׉�}t��ۤ�6���[�f;��!O.@�f!�I��|XԴ� ���|<cqq�j�-W[�}tq���ak�+�#s��63�m�f��ǣ����9�i���W�*Y�F�ڜ��*������G���TC���ʟ�/�}K㟌5���
�� ��0ӣk���V�7���$0��YFDcg���U ���޿�rF<�|ߟܾ_����������?R����].K�ou[�J�`H��U2� ���q��6��#����]z�����1�I5�[��@b2��6�\(g`B��G��D�>���`���~��h�����Ӵ�'M��\4��H�7��T��;���MtO�t��VpC�����G��yu��=�u�����y�>kf̌v+��+)%��Ίt�|�o�-~&������)�M���~�o���3R�Z��3ү� 30�B����Ϟ>���ړ��lq�C�>	��`��	cچxt�cI��FY�8P�a�jZ��h��_�oM�A��i�ŷa$3��"�f?*G�T�ćT�����ᧇ���}f8u�Jॵ�I��R��<��G#��vbT��T-g�E86� ��$��A���}~ͫXƞ{K�}�W�#�i,��>�G�H2Ĳ�^�6x�K�a�������F��,!�fM,��K�1��%��k�����^���w(��)��O��%���Q|�c��;X��� t�h��_O���嵒������f��(���}"3�Q���$ S��D��h��sX�#�[k����L��{[�;+)$�!��!i���k�<�H;�6>'�^$��� h���&�W�<��	�������M�,p�'�[Ȍ��QʬhW
]WƼ'a⯇�V���x����*r�)��ŕ`�b�e���������mm�@������:��*��.�{g݌7I�\����RԠ��噝3D��o��ϧ_ЉA]��]l}s��$ӭ�=zM�_>!;]�/U�ɯ��7�ɶ�[��P�"v������&w�ǆ�]�o�S�o���i��Rk{`�HJ�k�cxT
�J�91�$ }�����7�چ���&��?ƶ�o��m�#$�o6(X��K	��b�Ī�e�/�>������.��#�F�o�8�)�L��W��m�-s���P<�BC�\��N��M_�Bh�+?����q_�O��[������:Ǆ��`���@UÓ#��ʨ�g�<���̌=o����i�c��S�Fy+uh}}�_Z� � �6�4Z����A���������,�;y����S���h�}5� ��|zW�N�p�7�t�؞̫� �y��AX�
��| �B�xLң��TwQ�|�կ�_[�V�Ӌ�x+9Z�mh����,}�s[7�q
�'�
���9��W#u�f���|��v"�\$V��ٖf'�V?�ޠ[(K~�Y�؂W�z�B���#�;����~�^<դ�{;��<����6�Q��7�||��_�}mkv��V���2�r	�N� Z����~
�O�� <C6��io��0�=����eP <��1�2�_��3��<'�a�٨�G��\���FO��b<.K�#'�W��7ŘH���^.�V�,������~2�2upi5RM�������b��d� ��]��][�m6$i.&`�����NT���g#��~(����n�7J��ͽ���C���3�)|2��
1�`�絿�Z������f����E�yӄ�0�6^F�H���cXx9�u}�ϳ�����oi
H��n��J�i#R��wW��q�B�%�+IY?�M,޺[�_W���8[��9IS��R����U��x�����Z�v�֋�x}m���о����W�K�O��fŽ���y�'vA�Y)����Z��r&��m�Ki�x�;q9��1A�&@K�^X���{�x��N�k�6�Ҽ��N���� Vcq:�6Z�8Ne�/i�s|<>�_M������]�uzR���7wV�YX���m��+;(U�N��-e�z��F1ZEi��|)�i~��k����!c�U�l�H�Y ��%�s���o���������O������m__������v�`
�0�,@_+�4��ض��7jm$�6�mkcy�ae���BےL��N0���:w�5F���\�n|�+�еmrg
����K�������k|�s��vz� ��S�~�oA��1�ͦ��X��c I�4��?+� �2�<��^_�q�x�x�_�ǩ�\I�[Z��w�i,�&�ܤ�e���h7w:�֭�mr��O���O�����E��>`��ǃ�r�	'�a���,tخ> �WHcy�=M��,��4E��N�<O"��G�$P���� H������
x7F����i�����|D��#n#W̧tc�s����>����[�zoÿx�Ty�,Ԧ�فft���frHf�I9_�N���|9��N�����~IM:�%��
����ܳy��T���_�ӵ��n��}�2��k� ��Y[��#��IX��<��r�B�CL�Gg����0��.�w{���1�;Rf��#Q�[O1���Y"9L�+JNP:�\�5C�
���Z��$�����H��J��uǮAȯ̲u���M�|@�����i.>ؾ(0]F0��#���V�$̮��!I�oٯ���4	�N���4Y6�6����11
��!��|��X�����c�#���4R��_�G^�}���Ś}��$��ᛛ��.�p����2��\2�[�����⏆?X����j�m��O�ê�~�#�#P���d��E��l۔��1_�Z����j�Q�/,um.�3��[���:0��H<�l�Fr+�ό�O/�j�����#A�A�����&k���9�!*��w��|��u
�[׿LT�FK����L�.�㯇���_��$��i�mGD:=����DvL�(T7�cU��*�G�� ,�}�Z~���Y�yk��7�A�l$T�*E6 %X�y� �{�� ��|7���#�����y&��M$/�Z��"P���˕���oRv�/��!|ma}��7Ѵ�kI��"���~��4�?�"���B6���,I�j�gU5��Ǿ�K���o��9g�j�vz�լb1w9��A�!�l�9f���K`1+ɴ��m�l���G�8O6R� �vrG'���$3$a3�z�@�n[ӕg�ݽLe�����<���Rx��.�Lz<7'���YCgw"mm�4ֲJ��"��P��N�P�s�����v���vf{�i�Ť�$a����h�ƫ�3�ۣ�6��4�ߴ� �;�F�?]/��+hR�U��,o�#�Xg1.)�l�q��'�ϊ�_���_�C����5Mb�K��^ݵ4jPH��%�g�|���
��'��qZ��ʪR��R�ܜO��sSVKU�];��Z�u3	[�?��=F���=C�1k)�˨	#���VI!�RT����Bʒ�,{c�#b��A^�����x����6��M'Q��MCJ���+	����V(�iU�P�N���+�_<Y�_;ƞ��/xf;��B�a�,�q{�bo=�C��*�W�������[�R|F���������LvVfkw0y�"�SK�+�.aG@�X�q�~��O��*S�*T�}Sw�]�"J���Uv�Z��Z����/��O3ܯn</�/�ǆ5OE��,1��W�V�YKp�h%K��n�V��96����S�����
uo���E����ڵ{eky��g�1#��Q�$���Y0�~��Ŝ�&ht=CT��,o���e*��7%h؂�d!�p��X�|I��[\xoºƱD��7V���`�&��E۱N�wE@DfS悵��>W��%'IZN:'�ԝ��y���l���w���u=���>�%ߊ�|A�m/�^&]Q��� O�S�Y^ۘn��J��w��el�V`�&&���Q������Ֆ]�7�r$���q߸t_2�r���D܌37�x�[��?g��NMF�I��Ҟ�O���SkS��n�3�*|�V�V2���;�ξ8�b���h���u����3h�t��ۆ�VH�1�����;�F[s�6�9~*�lB_WR�y�ҕ�ɷ=�m[K��7�Kۡ��ЩN���j��m��k��{_u�N��f�c\����f�.��])��-9�5-������ʳ)��"W�K'�D�dTʕt������ϊ4+�;G��8��4{�h�F�S�j����,R"~���B���?��w����W�Y��v�V:b��
��Hn$�\;��$����+xk�cx��>m�u;h.3���-jVP���#F�E����AXYWc1��T���<E,������Wo�N��[^����MLu*���d�%ky/?�v=�O��Ek6��i���76��j���#"���kmn��1!i43�H�j�/���u��������v�[mM<G�N#P��{�`�M�
�K89v$�á�H���<v����T�Ү�uk�.���R����I33;��UY�P�vp�;I�/ͨ���Լ/�j��ˡ_����gi�21� ��OܖP�1ȧ ˏk'��>���go{KݵN�I�t�ѻ�R������wv�rG��L�H���kz�5��u�2`���Co��)R��_K��ƿ����?�<c.���E��-��|^Z�� h����1�r�[���A����)�TԦ֛RX,Խ������b��C)!*��vl1���W⯊u�"��լn����^�֭P���R!,w%�H´��H�ƶuK.�ԣ��73掊6���Zݽ_3�m��&���s�JVf���ꚗĆ�Ӽs{�6�+�Mn���}��� X�۵�x��â� ϳ��T�m��:��}B5�6��=q���&�cU���h�"��[�;
H�C����b�K�Z�n�{���$�vv�謸u��p���hrINw����z��������E�Z�\4��g�|9ռ˂-KC��$K�+��S*�=��Q[����cG����������]j�H��$�$y,�[��W?5�.���E�'VS� �mL�M�M[�7��m��|7�\i6�x��O�p�]�E��ӯ�9N�������	c�������6��x�Z���k�7T.���6�$^T�1�e�2�Q�,�;?�|�^���͡��ך(Ŧ�6������G���2���T�ܹP��c6��B�IZ���kT� ��&���W��#9�f����y�/���ɮ-Txn��b7ZV��5�7���V����>�yl����v��~�%��nf��Y�]�ڠe|�;��|��$ҕ#n*��:�|�[�����gtLF�,4t7쓪H����G�X���[ ��|?�}/�O�g���=?Z�����<R]G�d�2]�x ~�*�R,�������r�8Eū5ͭ�Zi�ͽ4�M=�]Od�w�?�����WFkuY<M�=6�`H��3jX�A	�NT#��bY�	PY1T~ �R�F�-��|5�h��Bq�G�(��|7��Z٭d�&|�d_�I'��<+�-KM�$�~�^��l��Kѯ!��$܌�r̀��W�?�� 9���u���1�Z�7�dԬ$�6�p���WKC$fM����I�}��?|��l z��`���/~*��o�M��vկ�K�ةS�]�=L���3���R�Z�O�f]B�/k���I���*���`w��qZ�?�#�i�:~���uI"khln���5��R��7S���V21�q~���_�.5eм#�����e�mOK�����R�u��Y���y�+�3��	�X�x)��L��n��U�r��������JH���v�@�9����Q�)��{%��d��W{ �Z���N��x�Uk{]K�Ft�{�����{�̢0m�#�o�8d��n \����mb��M����o.��Z�̱�Q'��9�c��ʇ�&Wq��I��X��u�m�TxDS\�$������B����̨��񵛝J;��$���z��5�m��#,�ysjGve�2���{$�T��Rs�VN�Ud���}t܍��UΗ�hs�o5ƽo�K�em>=��#̦6?=����+�%��%���F_��M�;	n����}��y"\�w\�| ��EdR���>�O�</�� b�^�=KO�����]�������P�Is���H�؅��!bYXfk>oxvK[�+��4��wZe�������2.�r�������Sb���qC��I+Z����].�=n�Z����O��O�����:Sk���S뺆�4�q����El�������" �|�Ox�ú-��~����DmZ���i�D�@�n��݌q�ʲ�S.��nG�#���}��?�v�&h��<���R��D1˵�9�VIAyJ��A=G�t+}sK�l7:]����8��VV#����fi.|���W���q�ѡ.gS�/.U}�[o{]je���dz@�w�<O�[��⇄����-�)l]Kh��/�c�e����%��"xqV5��z.�n�z��uwnb��C���ym'��,�l��O!s�t�(˕i<=���<jZǋ.�3,7�j�6����&Q,ݥc�$�pJI�'(w<O���/�l�o�m�:�F�Լ��h�?!-㔬�����r�P&r81������W�(5�&�����껚��$�q��i~7��ɵٯ/,e�;yn<y���Xݖ��G�T��
Z��lK��<q��Zǈ�m��|���s������L�OQ��j�yRJr�K,���
���;E�5�� ���5���h�B�����U.��3yh$!�y��b7�U�h���+�c�猛K�E�����d�[�L,�w*���<�g�˲�EN�3|�}/�M���ɭ�m����^��V��x?K���Z�d������͜w��<��v!Z9G���)�ٹᯍ�&���C^�|W�������5����6IU�Hd�;RU������"������~(��!ԯ���.�-�:����,6:m�(�弖4Ui�B�@����|@���-bi�:.��gN�$�n�qy7�����ųo�vh��U���G�Yw���t��魍���2��V�5�u��cR���]i�gج��M�ν<�x�Y��Ck���$����T��,���,:������ر��5��"a~+�ڍ�����3�`y�~If �f����/����|$��^���6��5��=�nb��Jb�cfi#>[>�I0ɍ�zG��Gysm���%�^$����7�;�,�F��`U	4dM�����"rO�O���B5"����Z�]���I�z-;��_U"5�~&� f/�4�#K�F�t�}�	|w.�*�PI]K��۞$�rB0�)�6���5�O��
�={�^���"�V&���$���w�Q՞��wI�
Ie]�J�vU�?���Z��������/m|M�,w����r��G���7͹�UަH���*Ѵ��jO�E���txn7:���;�'}�	���l��S�3����q����l��쵽�WvZ&�ح]������� �={u��WG��]�~���[3�`F��ᴽ���99W���+I�it�C�� Ԯd�Ky�>|M��?�1�e��|��FfYUIH�AP���������&�ok&���b��	��kv���
��6�Z1P��PɁ��� �/��'�Y��w~���ggg�j�70G8�崯r�T���S!rWr���Q�Ru�Eo�n�eԨ�OF��z�����?��4�KU�S�X��Ѧ�]Qm����s��G�����8�ߵv��M�gM������בǢ�I���L��k�A����hO�W�� �LuU��d���G/-�6���-s	����22�2�F�<{�iW�/���;�Is	����W�k �Jr.ä��8$r�)|��hաW&�FZ�KW��%���۾�ɺ����V�{Q�߄־=��V;}SX��i����9�jJFe��X�J�88 �a������_l-��F��;�-�}�~�+���3in��?���!����|2����L��O�@A����}��J#ڣt�F�Nw�v�sį����'U�ʹ��:��6�H�B���R� �e�(�ĘEz�!Q~�V��ew{잌�׃�QkO�C7J��8|;�g�h�gT����RK��o26[t����'v�ۇ$4g$�(�'w��M|o���-���_��aLK�q	/�'p�L�&�T!C��:�������iZ���QC���UI#G�y�HBl�\0(y���~������5��\l���Cm!Ve"K���0���d��.S�t8��x�XF��q�ޒj׵����k��H��Z'�gi�|P�T�,�5+����tt濸X�R&#{up�ow�Ka�P����[xj�;�7°�jRj��"��ʠ��<�sK:n*Cn.ŕ��2�Z���k���Z���Ų���I�v����D>I�=�`Nm<oc���j�����g�K�5.X�Ȳ��ɥ`�m��A)�B��q&��yÞ�v��=o�v}�B4Os��_��\���y�=?P�����$�-�������Tw(�NW9%*�����6դ�W���.���;-C�7�\ H�������[ ���ld����^�g��4���o��]m4t粏�²�Q!p����8��c����� ����VsK�I���&"�+	x��C�� G�O4��*�iԽ���I�۲��T�nɴ����_��|+�����_�H�3���>�t[�bdfd�e$�]X��7Y�Z�<���E�4o����.���� �l�!K�I��i
��)u=��/�KH�֣z��h��{5��>)�;��hVMn�Ѯ>N@$�Sk�s��F��'���6ڎ��.�w��>|�������e;��;z|�v�J�ՊP~�W��!�L��G�6Z�u��?��n�_r��G��sRōo��瀼)gu����y>�o>��E�����v8/����Щ�\g�?�զ��� [k��x���ͦ��k�� �1�]�������`�!�*����i-⏇�����Mumm�B�߉o$�Wlh��6�ev�#�1F�e����l3��IKߵ�6�]/�{�oi���or++	�Mp���������f�)��t���y]C�}���Xʛb��K���"����>��V�Ge���͛]J��R,(�ٌ��
�%�C���|;�}�����{��bCh�T�i���T�唌���p	��/���_H���]�zM���<s\Y^�s<:��m�ULS��9]�ʱ+��U�j�̳�Xd��'98Z:^Ғ��u{+�{]nS����Ϥ� g��O�W��c�ƚՖ�c��K�쮣�L��/��\GwTYB� �UU����[��zz���u���L�W�$/0q����zd0�<A����׈���� �i�.l�3Ӹ�Ur���a�r�80�H�2�>Pw/'�-��|[o�i�\�>t�<Ma�����ؑ�Yy��N|�N��{��F��\�{'���K=��,?>����g~ξ
�����W3�w��5�ٶ�,z�� �`�KH�#�q�|o��w���,���x�G��C� ��L�����#��K�o1L|�N��F�%�~�rxG�4�^x?^���� hxc���1)�\������fܿ:�����+���������W�Y��|8��f�4�%�0�[�^5fbѷ��E��b1xX�Uj�[[����|�4���G��|;ռK����� ɬi�����J�=�,\�RI�	z&�J�}�m�ѣ�/�� �˥�%���|�!v!�1ƞb��r�=0
=�^����+������[���ך���ۼE�����5�����]�B�1��e��3H�!nI$���~�/��9q�����K\�]J���݌�ϲF��a��2C�2 R~e�~=�7�/���څƏ��y%�vSD����1P� ��	m�ů�}��u���߁���TԝΥ�>dP�
��H�Q(��F8�F�a(`]IJR���v�Qէ�T^�Y��K�7��������ox�;�l<p4��m7]�0>U�dM��#�kSI����)�ʊ�e��_�ǺW���!�.�.��u�6A����yK���J�,D{Da1��IJ���� w�����j3h~+Smeo�F�f��Ć+�M���X��������^s�~�z��/�X�ڕ�j�Ɠ,w�zb�j/���QC� ��b�dd���e�u;',��$�կ�~ngv�}>��_+�Ԍ4q��OMMO�05����]ԼE���O�󣴂+X���4ei��,/�1RF�IWb�ln�?g�^�R��<y����d#��S}vat� a��n��s���w�V�5
Ίc����Լ��g�kkkX���'���+]ʳ�Kw1�,��qn�J<��hm�_kƟ�彗ĭ���Լ7��<��:Eռ~sűL�O�b��
�";��I ���V�:X�JR�/2��ym�S��/d�Is'�ۯ���QkmW����4� ��J����mB�X�Ehg�U���~���F1��$@�|h\>����W�Eگ�n7E�����n��6�N�"�H�cGef�(z���_���l	�iqɣ��jj:d�Ks}a-������%%ݸȬ�!6�2w�ß<7��Vz÷��m�]5��\�%�������ZYmցE��h�'������S�7Fr��u;٫7)4������D�iF����>$x�����qmn�WM$����VSKi:�[��e �p�!1>�������]G���^,�|I�=���6��igP�pw�1�b|*��H���2��m|J�����p���]i�t��7�U����=�Ɖ"�'؍�S�f,��N��?� 4�V���^&��4߲��4�6�V�V�QGK�.�O
�l��@bpT*Lp���x���*QѨ+�ޱ�u����ot���Ҕ�c��'�Mz�ĺ_�o�qkc����u�ȬeԬ.c1A����"�6��6g�#��u���.����~,��sim�yz��j�@ѣ�
�!T�	3$�Up�#�1��?k���ox�k�4KQ�,WSH,&������3Yy�v���	,�����{�_���y�jM����ťXK��7Q_ƌ�^G>�xWp� ��6ȇ���SɕL%*�j�R��K�=�������R�IGWn�jP�yvׯ�dv��-��[�Y�������i��Y�媴� �ϗ��v�=�$U ������T��MM[�Z�����}2�cv�@�|���eX�m㕀�PT�����,w8�l�\�<?�A�n��{a�a��c�k0�-�e��� *��k���������w�4h���2ux-n$��e��4~|�L1�茬�K�� )FG�ub`�`��*Jz$�Z�ɽ5��m���X�%S����{��� �=SY���^���V�Ɵ�M�e�_�G��E�;i����bȲ !pSs���F2s� ~ ��ឲ�,�έ�j�U������I�V�UW6�N�@�
����Y�QQ����j:Ƌ�Y�wJ�Z�I-ܞ/����8�$��a�~D~s��c,F�ه'���m�i���</e�Kh��I��Q,vW
T�rdh^(�0�����V0����⚎2�9�䮚I��v}9[N�WiE]2)b�R�䓍�OU��}:�7�#u��Mc�O_h�[\�62��ݛ�Tʹ�(,��>P1��D�I�O�/���&Շ��};÷��F�����7�G��^I"D���`��p��]�=x����u���@�د-�������ԑlY]�D���q��
�s^M{��Ɵ~>i�0��-/]��Y,^�kb��٠b��>C�#oIc�����&<��p��aoj���v�m�I�f�M=��Z��>Y�%�%~���[�Ň�?�N��]׮�++�GHi�V�=RH�3CnFx�E&5ݽW@EZ��~,\xSᮗ���j�?���f0Z���޲�L�A�#0  P)\�KR�� �y�@��e��S�������[�ҵ�����%�-�p˹$� KG��)�G��x��5ǈ�����G6�Zi����e_��2�ea2K�ωAp
�9���S�����{(��o�k���<T�I�j���ݾ붖[����'�[�l�<U{������]���h�,��g�B�b]"��U��qX��o�/�q���s�t���d���U�vb�yw<1���ד �Pw3�G��|P�E����#�⍶6�%Π�� �?�7'̡���\�?��i��mSN�K�%����?��l��x����W 4�0�H�Ǉ�^��x�79K����i��Rז�i��$������������ݼ��z-���˺��tۋ��$%g%ʱX��,
�,%�_�>+ѵk���zֱ����� ���z���Q�)R˵#�$������>$�K?
���O�.�f[?.[����w$	�����ǋ>(�5hz����Zt7z����^��^�	e�I"0����&RU�W�+����Bt������I%h���{ו�֩j�D+Ԕ�լ��+]���%��R���;Y.5���S���)� �-��*�R6#�a7
^	��٥֦�V�R��K[���(��C��p2�a��W%� ����g�
��������%΋ga$W�k�x$�dɅ
���G 9��C�u'㭿�|G�Ǥ�若^#�\���y�����r��Iۆ۰�־S*��O��;�nMJVMj���t���ܨWm)J� ��s��� �[�:��O��������� f��
�3�C,��VE��x!�`��m�O�j�~���׶sxwR�K�����F����|�� ;@PF;2����/���o���|z+j����l���YKp	��a�G���|�YK��G���~�ìϣ�x�ַJ��r��7���|�I&D�8!����p�15a��͹Z���_E�YE�f���ʯd�j��w��X��i7����k�^ԕ�๽�m�aK�#��h�I欇�XX:��������|���&��K���#[7���Y>��f2~�̠�<�2v���~=�.�m&�B���Z]�4�D�<s�(݃��Y�$��7 �kb����5�Wß`𽬩{ed��]X�e� �r'�|�V\.1o'�X�աQ�T�SJ�&�-�*N�h�����G{��O�Coǚ��?�Rn�ꚶ���Z���`�3���$��K��Ezǈ`�}���,����	y���������9@U-WT����d�W���|�௏7�4񮋪`iz��<��R�n&�6�Nn<��Y	�:��r����7�kJ��k��/���h�:DV��I'���ű����IaKc� .�_A�����턷��NM�ͽl��Wy5�m�f�O�.e�g�x����=h�����k�7C�Qe2�y^[Ҽ�6��;�U`�O��ko|*�5�Mi�kMŬ/�5����fτgdyc,pJ��ݟ�����j־?O	^xI�uk�t�s2[�7ܼҀA�O3�H╊�be1���O����_��짭j~*�-·�Em7�M�ĺ����HY� � ,l~x�ۻ�-���<[�J�12�5-���˯��]��S�9�����'���$�n���6�uy��\�;M�D.��tFy�ƒ���!�q8�����]x<U�?���������6����\���,�+w2(��1&I~Q԰��C���MA?����\�[Ğ��?�-m�JYZH")/��B�8*	�T��'�a���]wH��׉�Ox�Z�n汉%��9�Mb��ʙь��V2�yգ-��Vupnx)5%ʝ�����^�?��r�9��ޯ�?ש��� �H�/��:֏���be�u��i����tC1�Ĳ�YC��{:+?��>$����co����a���{YCK�=�BȢ%�D�^�Sk�>#G���!�mo]���+��$�9fR�dS��!#�;Z����_��^�P\�5浦j'QM:7�|�+�����D�$�~kO.礣��S�n^kJW�h����y4��NI^)����h}���RO�׾.����ܹ�4��ml���`��Yw<rUع� HR�)Rf���Z֚Mo�_�(6���6j���f��L�n��t-��#	X��w�>2�>Y[j�#���j��4�2��n5{_+t�-�;!!$�8�7A�:��v�~2���q�i��&�5K���IP�H����M�.��n�j�s�W..5i㣘Қn�R�NVV��{h��ew�ʅ{��W��L�������7�+}�b��	��ex3{���	n��J�bp��<a�^��_��m^��u�&�X/$�cK�C-f�-��|��q��|�[���|c���5�ʳ�ں�݅����:�s�L�'DW�ƪ��+I*�k��|u� ���Ri�n�f���	�¬�9YFPJ�s =#`UT���1mҩV��m]��2���ˣWI��l��%)��ޖ� 3ټKw�i~�ף�����Y��/�9�m���R@�#�U�S6�\!��bI=�?u/��w�4LY#0=����#��y�v�ۑ���� >7��Y�a���BԵ[=���.����E���� D�g���B7GGR6�l�F��?��3�u���q�
�RҶ��k<�g�X�\������b���������N0o�M54ҍ���w���[����)y=��կ���-����G��K��o
YA5���0���@1���kZ��;�[[6�Xm�J��ĉ.�p��Y�ʄq��F�?tv)}��|Ui�C�H�V�����w�v�I���JD�E$�
ô��#��U��C�Zh�[_����!A�͙�ϖK��������LXU�2���*��z+k��+'�V�ck鱹�ϋך�����Mn�^���yd��̖�M�;3�
�s"��u ����6��?�jז7&�[�ӆ����M���1o�ym�63���7�>�'V�4�|u�\�y�w����R$��]q�Y�`�NP�b� n�?W���K��i�zͯ�M�P���I)��m���D�{*�$GԢ�z�W��Mա%�6��w��ں����_��=�HǗ�~/x/J�|5��.<M�����/�:�oHe����,d�y���.�Ő�����՚�i��o�5���-���]�,l���C'��J	�q�`��{�ě	��WM��-c�K	��u�E��Id�U�gY�~l3F��0P(�[��|.����O�gM��-f�M亅��.�:�� R|ҳ#�-[s�`w�V�q�毊��*n�\�+tQM5~�Iݽ�Щ9�<�Zhu_~5h����7V��ɨ�1��x����y�2��Ȼ��2Y��p]�`:�ٟ�>�"��:��BYV�5߈tww��Ͷ��G,�D�7]I��T�Ȟ'�c��x�G�V�.�[����PT�y���kHw�w�u2&��5��k�j�y��l�o��[����!�n]YQ,2�B�m9Ó݉�U��q������u�i%���wV}UޤjM���C����Gu>�o�[K�������C+C4�ĳ�̇���P�Eaj��փ}�����ymp~غ,V�X�����c?z?9��dbH5�$�]����::���f�����.�i�(xE���Ώ�`�8��4	|g7�~x��~���I5�ՔI$�љd[u�[��C�1�CG�%�?�F�i���\TUn�VkGk٤�캝�N��K�_���f|j�{�s�:>�	����kc4W:>�5�y��y,�$�VB�~M�*�H�x���ӷ��(�K}-</o�}6�}*;x�C[�m�)T�%r���������=�.l$]KA��5�>���N��1��$�L"5`#(�/$*����]c�~%�5K=!o<e���\Y���γ?����2o�S"JᔺYCɅ��`�P�jm�5�+�kZ����}�MO�+m���}揍?j?x#B���~�u�f��Kx�ll̒��vpeta����HJ��s�2���;��/�+�2�I.c��乸i��rR&�W���8X�<�]� fOx�4�r���x���{`hoc���B�%	*RK�VB���C�}K^���Qak�jw�.�ku��.-4��h.D��M����9[jO"'��������e���J|�֍���)Z-��i+7��2���W��f��������Z�i�5��Is2_x����F��-�A����X�\�	8�I�\�7�mk7�|M7�5'H�&�k�{���$j���o���ᐶ�3R�'�i4��>&������I����;k�e���h�h���MFĜ	
yU���f��i��3O�m�jB�i!�
üH�b 8�H�+�2��Щei'V6qi'��i�����5}z�iU�y�����D�|q���B� �:�{��� �Ӿ�r�F������2��1�v��u����@�f���~�E���6��ƍU��|�i'B峾B��$&���+]'���xoO��E�ō߉a�D�(����#tU���!w�,}{�'�9y��.�⡢����;�Omkmr���ci���H���
�3��<�Lq�PT����gu!��4�3v䋴n�n���k�~�M�W�K����3��~x��\q�����]r�k��su��Ɨ�-�>�H@{�
�{M����L�MK���u��7Ԧ�$��}�V4(���P� 0�ԕ��r�5M?O�'?�!���� #��[���l��n༵ԭd7wf&7��$�ݞ��vG�k���%�|'�ֵ���t��#��?���\�[f\G��s#�U�!�k��.<Y�ͤ��۬�L �WEB%�n���I9�rz��'��tM'��ͯ�,<3�6��S��}�jL%i�c]����G2ʄ�;��0⅄���I�>X���l���y_�pѦ�F�>3���~��I�l���������Z��|�nx�o�i��c2�����O����|��g��O�v4���E(�@$F���`�8�n�@�4߉����!���60ݭ�^\�%���X��|�!�L��n?&��?hO��M���h������,+5ƭGl��Ȑw��X�Y����q���<O/���Q���w̛^z�ۭ�����;�^�C��n�J��Z�5�M[����Uleyt*��U����G�g�=s������J���O���tW�_l�eH�ڨӱU �,�2x��� g��&m"o�x*�o�,1]ʂ����d�'ʪ�7p��G#+����t�]Ю�c��/�4k-)���`������%%����efS�a05'�����ik9{��S��>_�}�?�?|1�����k"5̰��<>�����ĈQ�%�ݞO<� 0���/�B�<M��%Ʊ<��)w�{�͆�nVI7 k`ٌ}���&$t�X�$k��l��Jc���Z��-�9
K���W�.�g{g�I�iw���N�TuH#B�����m`��	&M<�	B���IsKwmz/�~{�iN���Vk����/|A���������E�4�;I4=Xh��o$,�?>b#{�x����C/2��\� �k���~,~�~#��ơoo��Q�z^�{���P�,��LѰt�#m���H�/�_k^-�'h�dz��t�����H�4�xM���E�tpHWb��Eڱ- h���o	i�6�Z��|�^	V��]�ַ�t�I
J�L@.^��)?��ܖ��lE5�m-���=�ݺ��"��^������>�]��7�h���'�ty��[}*�RI�8��$�BYf2I��bX�Rt_�?�M�jZw�>G�K��Ǥi�1���ǐ"�D�l�=���a�H�%�����L�<���-�?��7�z]��YhKqꗬ��wo"H
m(|�����D��_(���>!�t�� ٵ��Z]�������rD���-���$�2�KG�������q9m<VT1
�}�ޏ��R�9�-~��Y�����|6ү�M�|?���e{s6�ke:]�F�*�o*������2������~���?�'kJ�?�m�[�,��-����1�ɎGw�f���~��#_9Y�d�� ����$|@�t?k�7�O�uc�Yj��Y�t�6��&v�#f!V"[1�A��)|^�-�i�(�d�?���caqu����E���$�$*��u�ܬ"'fc���a�KG��+pvv��V�$މ��� q�p�֫e� ���=S_�^���Ϫ��(�,b�D�\�q ��c�C$�>�\����h�����</��Wm4��sa?�_��u��HLAW
>g��(b����������S�z%���Kw�����$�ς������gu�L��̑��@����<6O�n|/�i� ռ+�cÑ���H~��s�MBYm��)��4��1�� �A��D��kG�������J)5�g�����h��`�&�	'w����S�� d/x�o��\V�>�&���Lu�f�5+XcV�P�b���#�99@U���1OU�>�_<5ww����[�6�ũ����t�'-D�m� 7�UD�>{� ����/�� o,n���,Q殣�	�j���$A��n[�G �)��Y��9��}�O����|#��u�n�������\[�4�.�Ӿ��*)�I.��B�YJ��׳���[�8�SQ���X��;� ��w�� ���ź�G�=^;[��e+m*�I,��|�����-�?�_�?�~(�z��K_�n��è���Q�ņ+ƎcMȒ~�WtQ�� 5�����_xs�~4�7�='PյK�5���
��mKO��c�I��o2��RaB������W��|m�kJ��~<h�o�9N����S����G���i��� �H�B����XUZN��+۵�^���s�EU��%�����>k�� ěO��u&�N�m�F��7�ĥd6��	�WVf�ظ3B��?vk�Ӽ]b� ��]CE�lY�KqlV&����!O��]��o<��~"��l_�7>��H�nt�ơu~�!�x�Nv(#�Iɓ)��k�?�5򵯈��yv��l��ڳ�=Ϛ6�%�:V����y���3�N'�^"�hP\��NO�5̭��_�׮�����S��o���;�w���Ox.M.=B�o/e����ϼ�K��T�D�\ۀ��F��ȅ�P���^�x��Ǎ4����{r���F�{�m4Dӕ#��$Va(e���:. Wj~�� /5?x�^�u�k]�X�4�T�}��QڎL����j�˼���־
xM�5k}3PԾ���1��E����s+�������5T��t]�reg�'�����/�^���6��~�v{]���}��z���^������>�֛��/���z��ú��m*��RyV;{c<��e\,�Ʋ,<��]<��<�N����ɫ[떦i-��h�<��ܕ�>T�fn9|z�Okڷ���B�ĺP뺄��g$�jr*E6�һ1����f .�M%p?>�?<?��Gg6��,V���&[YBK*��U̖� �0�.a���v�� ��z�����������N�o�+7�����>�����#��kG֣��4F�'t�_�c��F~�,&>ATf.�]�D[��?�o����7�]:�����9��>1�v�"�!u[x⍜B�4e%�v�(~�������6'��$�X��$�/l��6����Ij�:_��G��� '�#����*9�Y�;Yo�MS����m�M2�u?	�Q#,��șc!+�%d|�F>�-��,�LD���E$��ս-g�[��b�Β��κ��� �:��٣ūZ�Zh��g�Y����vA�2��h�f�7�@�7E��N�����ɨ�>���o���ᛘB*"�1�7��(GY$_��6zH��mrK��I��LSQd��4�tʒ)r�`��@ Fp��`�����s�~ӯ�$��5�Ӯ�9�/�|�d����H�������UHQٖ�8l��ek���K�ym��ڕ�'Iw�� ���?FM5md�j�=��e���H�\R�KX<�q|��
�d;F��7�� �������t��u�f�ukT��n�z�[�BeI�m�b�I���5�#+r���O�7������/4GK�?�M-��epQ�����gx\���S�Ƥ��%�x������i~*�[��*�Ḗi���I �d M�(-�Q�P��Jw���V������j��0��?��Zg�#�+�?X� ��T�ng�?o�k{X����#�V�4fw7��]���,�7����E�%��Jе~�$Q�|�c�\a�����Ӈ�w�i�]xWı���2�&Vh�+&S�YHb�˸6�pM|����~��~9ӡ��\���t���Ko$D��p�U�Ug�%�aV,)���x:88:Xh���j������=�մ��>�#�C`�6��$vdM���mP	�G��K����� �W����|e�N��!֯�f�mH���-�f���1�G&���1={�N�o�~��_�� ދ}R�����\}��]�
��wK�r�C͂OΞ9�Դ�>����[���yk冎��M��q# �h�^#a�(�gR6j� �搊OS�ߌ?�>���ǚ��گ��%�<��A��9�X�%��̟8�����+��5)t�_M��uKh�E����R�+$o2 ��7v��<l�����ٽ��=𮡮YAqy�7Wz]ͳOJ7�l��w`�V �wWϺ����x}tSuok��Cj���k& a�2��dY�o b��Po��YG�U�VS���4�޷�w�F�N����w�X�z=?S�� �ǋ�u����f�΋���,֭%�����v�V$�9� ��T��֎��{�m�<:��Oo$�z��[I*�ˋ@[K��HʕTs�彣�G�r8f�'�R��SML���O�On�|�#�Q��g�LI�a�ı�g���?�Y��,���Z�����g�ڶ�=�ȷ�ؖ{y��c]�Vܳ!�$˴]>Q��� {�����*yk��K�� �k^�|=�7�>#�B�΁�[[��,V��CK�|]yqD��X��l�cp�Gb�UX����_�^��5���G�z͸��ִ]6�}z�G'�p�
�cy�Lj!�E`%4t�/ែ~"h:��u��k��6���՗�y�7C��)�9��Ƕ7|�!*E}�?���ޛgo�k�Ω76�@e�U��Db��*.c�9˱/�?O�¨R�ӓ��V����ˡ�Ӣ�l���]�<\�w���"�����ծ��j/wsh|a�ދ˒�l,�Kj���3>�%�0$��5����?���E𮡥���5{��T��)�$�8o8�T-%�/�lS�~3���C�'��/���6��$�z7ÝKϲ`�s�<�s��V$`m���-u+�Z�u�}SSaw�|K&���I�B���|p~d�MuQ���|�O���%��k��+��ƿ�|+�������E������5��nyC��j�#T�H�/@�y7«.=��4M?����WW6��ܬ�$&��l�#!������^3�ʒ P�o�.���[��KV��I[E&��h�V�Ȃ�c�����GxL[F�ya�k|Ou��C�����.K+�
�����I�e�d�ɋ�gG>t�Cr�N~��9�o}tѽ�٭�v������FN|����H����+~П�M�Ѭ�+Ệ�o���ך���,{��ۯ�����T�m?���Oh�_x�b�3�Mb-6�&eus�Y0�64���.�a���x3D��Q�)� ��KBdYua�k�wH�*�igӒ�$�¦2w�.W���߂u-sH��N��!����
�x�+{o([	c(ͦ�����vbAf5(�Q��Tc̒�k������v�:=�T��k~���n�/m-��O��T�"A,:����z�� `��r�c��6�Y��'���7�:^��?��?�#լ4G�����t	�ź�G!u��&Fv����^#�_��M&�Q�5�r���+jWvZ���2��!K���@����e#_
~!��0��mJ���k�H,�l�AԐ�0JL���0?t����~C2�1���r�,����������]'��l�m]:kѵ���!�W����ƻ��~����j��j���{#HPſb�4q��ql��|Ř��^��4]P���־��UY�U���~�$��)m�6�-�FX#�>R��7�~�^4�.��~ �M���[a��Y�oysu��o21�m��y&%�!���O�7GM��WR��;in�S�{�k�#.�7�n3�[�q�a���[G+��u!N�ٹ���K����*����Fsrx�vQ��~�����X1Xk���̈M�I���$� eb���Nh�c�ٶ��x�H�Z�M�Ϻ����I<�����z��������oS����g%��u�̗Zt����O�B$�3"@�;���!��Ք�Eb���u�M���z�����+K�C[�<:b�KH�C�.L�e�,��������b��f��:�d��.f��j��I;��K��[��T��������m6Kk�Z������)-�4R[Z�֏�C!$��cc���_x'�z��$�ڴ�9�K�/$[K,^j��Sʔ�weI~C;�������ŝ�ǉ��L�ҥ�6���]9��X�źpci]ZB�dǏX�7Ŀ��i������@7ke��&V(c� y���9gys��#�*XJp�+�o^�mSW���Փ��j;� ]^�ܞ.�|�x���M��~�c6�%�����l��၆evl�1,Y>o��X�׵K[CO��GF�-��|',f��I
dIԫ1@���,���q��Cq��Z,�^8�4�-�<;qa����a��VDۈ��'vey�͸,k����Hf��x�↷��Sz�閰 ��@��P�Y$���e�&25��N�^�]j���wFwZ~���V>-�f����]�x�i������H���#�+3�� c���T�����~_Aq�Vk���3��Hl�dA�T���<�c�Cs�0݀��ϰ$zD�L�����Ֆ��'��RDu G���$W~H�l�BH�2(����g�o�,���<_�P���ڬڐ�v[��m$���@ 3~�2 E`�zT�5���
�J� ��?��o��_�o���&����U�֣���is$PZ��"�g�M�4���%��D��Y��Z�O���߁����7��pXb�rY���,�O���+,���-|� � ���O������z_�����%���F��Ə�$���8��/��W1ƈ�Vj6���k��<r�jd,��:�q�5�ap4���(%&�{Y�{���i)�Bƍ���}�M�l��m�'�in���c�;P�z�QSO����\��ճ!��O�EvٽLl��?�� 
4��>3ҵ?�J}SN)&����
�k`FU�����~��������S�w~$���\���;y��˓�����D2�!�Yr$����Li>v�"��MUmi��!�8�.�2Χ� /͜�C�~U�p�Z*��Q��|���f�o�ӺV�(ѧ?w�>w�y�^xc�>�5�������\��/���"4��� �ʜs�����l��:�|��D��ן�Ye���85Y��^��53
ơ�W�c�$��=G��TDcg�t��>f}^Lg<��W��a�v�������a��.T���_����j�Im^w�\w?O_A�^o��ڧ᜾��W��|�~��#\[E,Ѧ�!pcB
��q��@>��^��T��::7�Buyw���������>)ͫxo�σt��h�eu���p��R]A���+*c &O;KA|2:_W����jV�v��߮�[����zw�i/��^�X��`�KǏR�i� �j���O0Ȩ�p��h1�b����h�;�|L�5���<)6�q���˪�*�w��$�w����2�}��>�#��㟳xoZ�ұ[�o,V�hmt{8�a���
��.$���
���?V�G�+���_���z��4�55� �좕��k���[��6;�k�`\�n���ݑ���V�W��U�<T\tzl�N�/�'E�U�'���F���=?�^�b�,mexa<Q��6nY�dNkFB�=��^���Ŭk�jq����[��j�_�5K���Xƌ��,A�s�!q`�����hkV�;����mta��<z��6ʳJ��l���?.$����x�<Uy��K[�ǥ�m-^u�+yY�P�����C(%�u��RD�ZjmE]�v�Z����QrʧT���~��O��u� �S�M�j��z����>'������	��$U�žHA�]���G/άDgs���9<;�}=n~1^&������RZ��NѶ�hI�c8s�q!��r��}��q�T��z���_Ú�,立�y��9<`���Gw{ �]�� <��!� $.	�W5K�~0�m�!j-����^��i��\iW����(�c��L6
������|CK[�J.q��7��w�yb�%}֖�N�4�r�Qז�� ]Ϙ~'i����?JмW}g��x��ؒ��Ύ 2E4K#����0P���(m����Z_�n�ר�d&��]�k��K�	$q��)�@�JXǆ
�/�x�᷄~ �,��׏��� Ae���m�ך%�{�0Yw�ޯ,6�Td�O��5M;��If�ޟk��]]ͥ�&�����J.VFh�a��x���%w?�R�O����Wo�uv�k��˕��I�,�{iE+[��|�sS��~���Z�\z�;H�Y��d��gB��U��dX�Ƥ�۶�"�8kߌ�6}[T��q���� �[[�0�P%�D)pά���+�AF�JJ���,��ԟX�F���4�C�_"�O's��\��wRwo
Ρ���������vw��:����kH�4�����Db��"�e��s�Y~�^�D����]V�d��}6aO!��A�ک%�h�yRmh�n�W�J�'���گ�;��|g��M7����ĺM��ɷ�B[���8��2�?$�$D\�����kL�ݿ�=�����d����ey�V��2L���0��Ϸ��d������i��^|Q��/t�"M�^\� �Lm����Ui��T8Z��� �שA��t��Mg��sjW�k�Ze���?�9lƉ��U,�L��T�(+�]��[�k���]I-�O��?g?�z��4�KźO�'Ԍ=���m+V��|U�vh���c�!S���`��]����Þ ��'%�����b�w�mH����&13*ŸG"�`2�V:���֕q���ۏ�F�l,�ējW��rm�Fۦ�I�(�^Pm�9 �p��|R��[�?O�=��oce%����������!�6�&U{�H�BC�P����I�*�v�}6�W���lm��m�����i��xk�d7���3qi-���jv��[�+Dci�
T�&�E]�
mGa��j����hs�ɦ^.�t�[[O��-�UV}��d��Dr0�.p�H�]O�x�'�ͪCcyq$�i��M�i������Xس2	�L�Z/�4� x��u����	�M��L���LUd�~�a��B����\��4e��Z�ݵ�t���6\����>��⏃��>׬�&�c���e#jZ|i@�/�b�F����7��)�|q��z]��z�O`u?��ZN�cy����!���d`Rː� |��{�Ǌ�k5> ��;��v��]�J]Z�+fB�p�[����� �$$e�V�̷��ѯ4_�n��ά���:�ƗBYݠe��:�p�ؖ�_�j�����	>i6�ko�۷{���S�*�u_#��.�s�/�z֓q���ز�YM�5�I����q�o �����"�m�ٷ���>	մͣ���-B�jof��[����N�v�a�M�3`(rA �9�O�G�ȴo�Zn�co������l���c��]�6��`ϰ��욧���h��uq��%ܿ���o�!�<�2+�wa���s�9>h+���jaeO	�ﵞ�������Jw�Bx
��?�y��C��}ݷ�l������;�2v�E2:΋���y�)����폇�.��U�i�]��cy����f��o=�D��Pƭ1Fѫ�|8�ޓ��g����e�[�k���a�C˙�X�+ʭ�";7�^����7�/5���!�#�h>h�(���ˋ�r���"��"��ڤ���jX~\B����]-{�k���T�W<��F�/����k���5=ė��S�wSƱJ��`ύ���FF�Z',613�W�π������<W��f�r�����[Co��X�Ј�R1���=�V�;|�|w⿇���U���K�߄���8t�?1��r+ ���i`�m�e�C�NT����#� �å�)�PԗP��y':����j����mR�'�\O�m�!2 ��j�6�۳��U9+>U������:����U�V�/-��նD#��� p�S���EP�ƨ�!kٴm3ʉ.&�1����(�5�wt�6�++��f��_��Č�z{�>Z]ym"�`
���S	EB
߉È��6����G��PI��5�̡�1���<ch��_%�-�����,_x�f��u�.y�b��f�nnn��T�$V�h���ħ�y�mO�2hQI�壸��6�26#�em��p�x�JC0 |A�a�߆��d��������Ϯ{֕%?��^g���`�����S����Q����s�$�c�F3�Ȑ,gw̸b	�F2U�X<=�?����X�j:��Q���N��bRd1���v!�?20��{�W�k��7V�W���0fk�U`�������a�]Ǉ�]u�}R�xY[�%�k ܪ����9��^j�������Ӟ�ў�� 1�޵��c�m��}=��xT��8�y.'Uy�@�=�p����F~u��ȵ˿
�:�Zχ�n'	b���C�<_�����%J���>/�K�/ĝZI��r�S[��A��s�$�H�`�N�+�qӰ���[�f����-�r%��%m��0^	U�ԏs^�<,*Z]�9T�=;1xoź��]�=2���u��;�������J%�-l��Iq��+q�tQȀ?��� ��/�u�W�� ��_��kv��v��l�qnn"[o>�Y�1��y1�J��p�)U^[����<q����.-B���U��%��-�Je�����,*�̨�݋(- �O~�c�o��jxf�|M&�g�Z����E�B�і�H�Su$��%IB���2����Ǟ�����J��/�fL�4��ߴ���g𵍽̱��Z�Ė�%��-����b ��A�{4�fx#�|C:n��]CO��D��7�:���d1�$�X� p��� 1`�_�sQ��M� ���J�×��=��6�Z��"��S$J7;0f���+mW\��W�>�����ν�x��p��KҠ���{�i���i�"-���|눙I�,�2qՒ�Miӧ�n�1��=^�/3�3Ķ���4��c�Tjomn4-oų�L��`�K�i^! fHB��F�!�Z�~��K4>��EC��F���7V�.�4���<��[�Yah�!?�~%|@�>����¾(���Yk�͡� �O�z�P>}��Y���m8ڣ�VG��X�e��uo��0�Wĝ'T��������c��v��Y�Qt�Ǘ*��Q�q&0��cs��ܯg����ׯCo���~�xkǚ����9[��$�l�� a�:M�ZD��Ő��@��
�ʍ�|�������oڏ��(�����h�Ʃ6��G8i�l�i�Y�l<K,JB�>g�k�.<q�"[�K��im�[�{�>c�"R���p�c;m',_��/�_�a��t�� ��h3i��jvqXX��[��\��C���"2���y����1|����«���ڻ������Zh�c8������� �'���/�-��Kēk�M�Euj���kh�2���Z�QU�#
�n�w~���Y����U����n4��lw���խnb��H����C+���V�7�
c\?���WZ\�$�5+u�����:�L�P������ؠ�!
|��}C\��5-��cg�E�����.�e�r�X�L��F��A"���w�a�ԩ,>`��!���/uZ�/V�Z�Wv�^���U[��t��|������V��={����&�w{�M���Qc1���X�I�>YNU��X�?��ǫA�^�T�ds�>�c-���c�*�3]�F��Y91<[d��5/ د���&�����[������{��F�-�U"]��&-�Box_���w6�%����-[S�n�ۈZ;f�"��=��G$h���M�wpF}��kXy���'vҾ�zs-��;v��[��h���φ<]�_�~&}���h�A#�z��i��g4���*c�)�'�]�p�G�K����;{��P�W��PjZ~�gxi�X�"H$-��ٵVA�º�
�τ<Sk���x����5�G�i�"�XI�UI)��)f�a"��s[��yRĺ(��,�6X��K�?D�w.�l�!Ӵ�;������.��,�)#�$�r7+��*��2�%�h�D��ե���Z=�����5ݞ˱���<Uo�jZ\~'��5+mBU�+c?��g�G(�a$��	@��߿w����v���Ě���� ���Zʬ*�i�C	�$��9r�d;�����Q�]�K�?����O	?|L�ZI'��Q]���I欜ۤ�d�d�F�����,�V��PG��$���.���j0�˩G{��bU��vf�2�)��g?�#���R���%&���$������\2Q�������������o�K��.|��9�{�;+h��-�G	>�G٣h�r���p�(�Sox�/
�Q����1v|�.��R$f���U��i�".Q��;V��ɟ�>1��|#��4Wq�u+/�$O,0��K�b�"���t�k� �WC�_��<3b�:\+Z��p��j�M�*��nbx�b�iFᕳ�Zշݓ��+�ڳ��K���+��,=�W����#�ͧx��>����lw��.��d��R��F$��{�I���I�3����5�׈5�7�闒�uy���ּ��'���C�y(�<���fV#g����چ���o� �� c�6��F��eKU/�:�� M��r�G�b�G��W�J�Я�?c��w
���]�i<��H�fa��X��*���W-��aΒ�[�]���t��̏m^3�Z���� ����|q�x������~�� ������������X����cD�VL1��	�� ڏ�Ŀ�^/��uo�,7����l��Z������I�х�!ip�A��� dO�?��$���?C�C��3��E$O�=:Y�ಧ���y��]�0��'�W��]�?���5o��M�/�������O�+�Ft/#��̃p`*HV�Z��$�M���*.2��JM�wj�ݟViR5k�^�ii�o鷮�w�e�ܿ����̀�~�J�{g�5G���q��a�$��;vu�U-"��ʹ��F��*��A���� ��|O��Sk��_�v�kWp�Q�I.�U,�"URT��������O�S�
c�k�����L���o� ?�h�v�[��i�J�q�o�2�Pb��o>��R�Ee��~��=���Vs�7e}w[w��zB�G� ���"k]u�Y*�5[{Dky�]��RI4fTVB�`]�T�$`��/�����5��}�|E����m-4�9�Ymᴎ��C�΁�."�>!�؊W��%���m������4/���]u>�ՠh����-�
�u�6Dʿ�01ۓ^���h|;u�v�݀���j���{cVvU28;TrO�W~.�RK��p�i6|+� ��>&Z4-�F��0`>c���G=x�q�5����e>[[�*�T�q*�_��k�� ��O�k�sxz �=��a�:�t�֎��c����^U<<%Vri=��H�*b$�B1mo����ke6�t�韹��\2}��'���;��f�;�n��$�	�� >v� ��okWYk�ʱ����� ���Ν�<�+�r�N�
�|�_/A�Sٯy�y���_��~2����x��Yd��;u�I�*�&2�B�<`���A�����So���R�N����O���!e�VK��F�I��*X�$����o�隵�۴�W0,R�"�|Ɛ��C����ď��u��u�+mo�-wugs�͋ȴt��)�ˆ��a"8�#F����q��w��P��$�]��� ��01�"��β�SO�M���J�]%f޺����5���� B���:�̷bv�J-o���+3yIoL���r %wh!�?f�j־�Lo	�[K�ż�ti��Z��2�� g�d�,f]�L�21�A��|>���k���V�m>8�m-E��&�i^��"h���G��#̨v�U����^!�5Ə��I�#豽�֝���F%��yÍ�EeDF���7��"#�ʴ�Ny~"JN�����N���J���깭�ǉ���XM�I���Y6���Mt�Z�L|<�����Ҭ�MYm�Y�ۛ{�;����;�����f-"�UeV�T�n������>xj�Cռ;}�j�<��P���co�i�y��\�щg�5ffh��I%��?�|ky����Zͧ�0xg�W�4w֐m2(�
�� G��J�D���$e\q�?ōc�K�o6�rh2Y[��M%��0�V�%�A�]2�tDI�u��D��a��9.?+�ɇ��2m��ҴR����k�Z��V�o�I��V4��on��/���O�σ> �|Z_���dy&��KVS@"Q$.�, 6�a%Bϵ��X/��D�V���?C�G���v�����ԙ��Z��%��P	��]��>\�;r����>�����V� ���R�Ү����`Q7�FCG,M׋`��V��|^�׼1�.�᥊�P��	���� �R*�٬r�I� !
#XKHp�������3xJ�r�x��5�ZV�{tM}��R�NW��e���7�~ʞ�����z���	��B'��k����%d��	'-�\[��ڳ1b�Wm{��<� ��B:�P����u�OhVX�5��-�V�̹��H���3�� ;�{�ok�k��^L�./f���ѣ����)3�PbA�0�s_���~#I��	t�r_x�R��1�Y��"�@o�y����]���01�I��*�J
Uc���v��W��������J��sҎ�� +[��?����7��vh�мI�f����ѿ�K��X-��$�s3DYe#�p������[X�&��i�,>,�m�����=����IZ�� S+f��'�J0g�޻��x�B�У��C��u�u)nd����da��$��$.p��d�9�~ �M��h����;��K;����C�$��!V{� �U����ZJr�&���l��M�wJ�vGMI$Ӫ�z���X�?|)���=K���E�9�O��+y�e�՞1�Y��x�cb�C�Dw&C�|*���b����}}����� ڗz\�;h�I VMV81�����~j�c�Z���'�7^�df����-�8����|Đ0`3�Fs�1K ��E��<E�Cc�X���lV�д�Lފ�	c����p���umg��Q��ij����]nkSKHɽ=��������4=�:{x3�V�I�u�9���X'[`%�ȭ�IgdU]�O9y m��x�O�m�m�Ӥ��%� ]m~�V�ny���ڠ��m5�kd��ɶ��B1�=z���� �!E�eV���n�z���c�I���R��������~ �A�4�:��-bE��弖6>���$1J�4����d�Ƒ�%d���x�� �Z�5����xn�m@�|3K(",�4Ʊo����B����`��yth�1f��L��ׯ>��qx&�x�>�~y���Q˱
��Թb(;%&|�⯎?,�(A�x�Ě��L�T�It���~l�I�A�.�˓��Ixg�.��7�MF�ƿ�_j�]47��qݤVK���o �n|�gw]�d;
O�WZ\J�l�ܻ�dl�1�A��U�/��eV �C|���j������&��	|ƱT��6ϗ5-*?�+�|a��mb��Vw�g�T��IL��#��8բ�h�0���� G��'�cV�����=��4_�V�ۺ_k�z|l�8�f�]���(�۱�ʢ�������i_qr�F6���ڵt����1h�p��ʤ���s�֓�+KV��Q����s�:o��x�ö�:~��3Y�-���3I�\�m�[Atʓ��f����Lw;9w��� ��'x;@��x�f��Y���Y�rY�F3�,�����PGV�ix�/��B6�����3�8>����:\�8���m"e��m��s�1y��q��X� eV��eGN?�����z��'���աUԒ��2��(���z�@�q�I�C��k�ռ���3��o��F�W�rv�XV���'m��Y�8M��z���_>� �S��K���N��׺l�X�[�z_.x�)4E�E%J�8c�9�k�.X[�9~9������=�ϊ�֫}��j�R����40X�Y%r��@X܀H�L.H�+��?�u�K�C���|i-�WѴ��aK� �8c�����? �&���>�{�]�������w�e q� }k�>3�si�(k{{�Ia�<r�{����]����T,S��)ذ�Sp��?�����/h�q�縄�%�ar�,wl�2YD�S u�z2�ϋ�M�͸pv���m�����Is��\y�F�n�P@�2�� q�V����C��E�l�����Krs�Xr�����(�V�w���@��R�a�h`y���ݢ�ul�Xt�_��P�m>����� j�� ��t�7Q��|A�K3	��u:Q�mp���]�02�(_Ώ�$<s_�2�H�I����T�H�~P %�ـ9�95��x� J�մ}/T�U��o�m�~k8� �nf��!�t��� y�D��z2�i4�?�?��.<�����47��I�iuk��J��=Z��2�N-�h�$��CY���<������_៏�<X�$�^���x��zu����@���H�Jy�&�~$;7���oW_�zv���[��j�_���%�&9���I�6�o��A=�j$m�5�ؿ7�x��>�W��+��G�ס��.U�G�?���~(����~*�Z�%���hk���9���N�xT�� 0�>��-'ᗅa�|_�/|���� �'K�����WW5�]�$1΂$���q#FY�n 4m�i�1�4)���6F�ch �6"E(���;��I<�#5/ĿڟƟt�/[��q��[Igsgmr���q�q,J��2�1����S�ɪ}��*T�$�� 3�o���~˨��wş����f�"h�m�����ѥ�(�%ʘ�b5�@�6�s��z�%�m�9��z�K�P�f��`��d
��e�]�q�ce`1�awz?�E�O�� �A��m���+��Gu�����r-ï���q�����Y��_��6���q�}g�[�Y��&�	���I,���BX���3�х�(��S�n3��/�|�K�Xe
��m��.�+������n���9��-K�v� ��{+�h4�&�ͭ�O��h�O? �h#H+!&׍�]u��}n}I,|Mg$k�'����1Ȝ��%�d��ldȑ��x?�S|j��|G�V�����h�=6�Rt�%�T�W�P�x+��ZN_ᶁ��g�>�g����fN�{��,o/-!��7����10�mO4D�I��	F��JV濼�鿖���V����N�We���S�M55x��7V���΍cy�x����H-!��so>Z��I`��� ����J���>7���K�]k��$�K����O�D�V���+mtx���kK4c���������Y���X�v�j����(����S��1�(7����A���Jc�*6��i�|E������߇�<_��w��S]������q4�fXf�]�R8I�P"��v��Q]�I��Qr�	s����ﵺt���0�}�O�ک��uqi��M$�}����� �,~ x� ���4���8�����bחIu�ɽ���'��^�@�$��5���� _E�t�g�?ۉ�,��oqy�������pi\����ld32~�/���Y]̟�W��/\I"�{���a�r"1��̣	*��ݷo翊���Z񥯊toT��5&=Wώ9L1�.�O/l�"r���*��ۈ15���������wV_7m7z�Ty��Z:'s�����?xm3�Uc�yҡY�ߦ���ײ�r� 1���T,Aެ�����;�I�G��B�Ɨ�n��]N��(b/$;��IB����<[ʅ�'�� ��1��6�/��׼}���'�a�̶��O����4q	H�e���ܬ7Ws���7Z'��<A�k�&�\Kkm�Gv��F�nFbˆY��d��Эn,��Lx<%)�+9���i}R��צ�%�]��VSo^����#�ߌ�K�x/���g��0�4�1濵����up��lb9!��d$nl?d/���%��מ��߇M��Q���U��w�ɕ#��M�Ѿ]��ᕉ�"���MŞ:���j������+[}�FI"x���j˕�^6�n*� ����~]�Q���鑮�aeqsqx7 :<����V�69H���%k4����>����n��$x��Ě���kgi�ȐIe�jz柧�1�	+��.��EM6Wp�	�9�� g-�֭oy���v�M=��,l�0[��.T\�C�*F�r��F�U|S���#Ŷlk�X��\�kZ��%��{y^sw=����T[���c��+�}��'�?�� �c�[��7�EӚ���M���m�r��^�㘤��]Y�i���-J����ޗ�[�o�p�Wo_��v],��ݶ���o���M���2�L�j^5���A���	V(��I.at2��YY�[9V������a��>��^!���u-�u�h����(Z+YL��Jm���`�KpP��z-��~�~�]?�/����n�F�m��4�*ۀc*7m$+|�[9,H��?k�w����-O�־�3�yh��o&�N���x ���̋嬌�.H'�~�t}����h�o�c�������f�i�{��K�m�[��Ʈ�vr������eAR�2�$��eh�O��Ş��]:+�Km*k[ԞH�X�ʒ� !��zNb�
|�e�_�� ����ź��n�[��h�[��[{��e(��$em�
@���� �Y��x��׾5�� �G��k+Bh�{�d�D�W�R�#��3"�r|̿�0�����k���w��������������y�F���4����|;�%�.<E��v	u�ӛ�Wۭ���X4�4sϵr>Pe�����^#���x�^��]K\�'��Uma�䍮.�@�Y��G��BT0ؠ^+���čG����jZ���KO�4	yi�o�8I/�
om�r���1��*=� �X_�s㇀��4=�^(����������X�X��F��U�F9��@�z���
8x���mm��,.iR5%R���[]�~�����H�̖^�Edn�n��r3�n$�~�������
�',J���?l��/y'���2)�$gY�Yun�A�h��W� �v�my���O�OLG���� � ����zշ��Gkux��rﴸA��C,m�?���;�/��
�<igk�[�����Q���Q���!8<��>a��|�/�u����\����l�40�5"�r�� Q�OCԐ���U/�� �����;%{��_�(4Q��mo�7��E��L'��ӿ�wW�,V\7��#咿��f���B�M?��[[����vVM!c+�M�����$�  8#�oh��J�7nrIۜ�oz���Ϊ�۱�_�-5[ϔ��ȍ���[DLG`0<ɕz``�L~5��Q%���2����F��*	b|�<P�EI�-��w��~��V�����%�]&�~h�b��g�O�ڧ��|�'K���.��.n�qEnFY���B�d�22	��B?|\��7��x;L�u{�e��>�:��ۭ��C�AbTʐ���ח�O��w����wT�/Z[K?�	�)�GD�W,��[�V +��-�)�U�ǯ�z�� ��<'k��Y\�:�K��G�2JT�d��U��Iٶ������"r��]�U#vN�m"ݗ��y��?�����.���UԴ�7C��l�����H�q-�v�Y�ڀy�Jc�m������~!�^���|u�니b��L�o.���"� ݝ�0	�g����~Ѻ޽�oh��Z�����˲#�y@Wi�ܾ�Wpy ��G�@<������^�oiyg��^>Z;����yd��G���e2K�;\�`3�aUld��+��\S���~��_��,G�t��k�e���鴬�խ����O�_��`l��?�V_�]y��᯳�d�������p�<��܀t� �$ha��/��.�y46�M5��piڬ��c-ըB�G�I w�o%���_�g���>(e�6�֗���ww>��mx�&�m���^h�(��|��|&����5������I���D[F��S�G�W���F��T�ѕ�Tz�S�^�OK�-��v�z���<�.H�� ����� x�ox�����nmn���T��=5�!�ܭ�-4l8��e�!��#2�䚞	ִ�4�(ӼU�xs�c�G4V25���r��Ek�Q-3��)b۾R	Y+����D�V���%<0���-6�u��}^�L��tr�c�U�1�~D�"�z�l��I���~����姚I�K;h��!.��2^RʨY���#��g4��MY���k����#8+&�Og�����������tmSF��-A����mo���J���L���U�#�e�mxQ�Ir��gO���6z.��t�[�f�_[lK8ݡ�seb�-̄46�d��k3�a��:<E%��>"��,�q}ow�9S$�wY��6�p�-�/�fՓv�͜~��o�4ky�=ycyn�n���j�2[f��+#3�_��)P@YD��bqp�a�-c���m�%e}ߪ=n#Ͱ��\ka�F�b�����[vޮ�$�gM����O�^ mOP�eԢ��+ݫ�펱Iw���J�����mHʉ>��5�οm�y4}SA���_Ci�]��zL�H�6DH��跣}�C���x_�?�x�ÿ�]5��46��?`ѷ�[�7�$Ѫ:}��.��¶�[{�4��h� b?�z������֚� �u;�3m�]zk[Mh!qwr��G,Ә������a����2|���%�.Y(�Ϯ�%g���T��/iM�u����������� ������6�u�[x��ͣ����0����.ge��2*��܁��}���߁�}��r�,�R�3���eU
�"� �цR�3o��k�/�+����ka��xF��;y�T-���%��!`�Rah�8
S�`�Kd��(��Y�9��Z�����&>	ѥ�J�<�5��'ww/���9K�l��B����)BWK�� 5�����7Z3�?m��_���^�,4���]���T�&�˶��(�?����!# �� �m|� �pE��J�����x÷�L�"��&���<�[!�Pv�B�rH����}�� ����������桦��d�auw��P�Dk�Cco(q�5��7���[�{U+J�POR#�?>� m=3����u�� ����|=���\�,�@�bYUZ �y�����O�ͻ���m��.�W������ʜ���6��p+�������� �c��<G������[�5܊�L�{�Lc`ń2*(�ێ
�1$_�'j���ɥ��6�ek�[��5�/���,�D��H�;x��<�'��|ױ���  �^7�ŧ�t�{[�b{�-!xn3�.rD��yaQ�8�+�s�=_��«/�������t�<i��Ʀ�Qh/�`�u�v�P02Q�A pzG�?x�ſ� *�"]K� ݖ	�����Y�`[w#r���?n� ���9�˱o$��^�i��]��?��QBҕ衧���}�*r\�t��ɵr�����H����R���b��d���%e".k���'��o#o�-J����Z�=�?ٚ��-n����4�}��6����@!^C�#�����>��swy���tK�E�`D���*��8�P�%�w�}�k@��	�xv��^'����֝4:.��ه��k��e��@��>t���lF���H��Ϙ^���c� h�QI �����Q^��/h2|9���뗗ƹc�Ε��_�iuqyk.��*dPB�8]�(.��^2�8��HY�[�^)��]՜��-C�'�\��[���Ǵ�;|��
A� h�<�Y����Z�O/s'��DUh��f�1��U1�/0��(g9���k�n��Yђ�R��O�v�u��؁�\�rW c�:W��]�?����?���.8l ���5�tXcUUUT`|�� }�#�� �h|^C��~��3H�U�S��v�5�ԳL��H����������M�ߙć�ہ�?�y��Mo<W"�5�.Cg��z'�<-�j�������jH��e]� �q�p<`ם�o��7����4r5�Q%�;���s�\U$��R�3��o�+�-�;5Z�F,����n㾹Wo��ym��
��A��p_4�\x7v��֫r۾�$ۿh�v��_����S�h$�׾̧n�uL{� �(N\�<��G� �l�׾&�i��b��Y�����"ݥk�Y8=��эs�M����T�5�Xկ���nV*�4���7R�_.@x;��F+�����<�%���Gy&����`���5¡�� p˕$�~��L�9�	|��o��,��K}r(�J����wx�rΙ-#"�˱�G�Y��C,�����9��&��g��F����9-��(*�2b � �^��%|7�~-|}�t-b�k�*�+����Žc�F\�!���X8 ���k�|y�v���_E�j�)��qE�y��Ֆ&sjT��� ǜ!*>��<?���}�h����
�Oe`��( X(r'�$����e��&���l�#�	��;}wT�ԏT��9���슰��Yw����&P���Rri��7����+�v��� C���e���`�ͩ�@�H�w���� �+�ib�Q�|��֮|����t\���c;[*�FAہ����M��O���Z�;ł[y�bM.C�4�yj�	Jv�r�$�Mjir�-�~1|'��5/k�-�������6Z���X�PŴ�.�++.X��B��>�xc�b����[�y�#�Z��+\2�*$|� ��hc��<O��:w­b��j��k������$e��1��;��pW��>�᭥ŝ�c��Mo������0]r:���`$6��̰+پk�E�����w��;�R��S�n�~��?�w�i�մˋ(�mXay`�����bI3'��J�`�$c�ņ��C���<�4}>�\��X�kD����䕊���n1�K*���/�r�ܿ������ͮi7����QGJ~�ʌC$q��I$la7d�T�F�s�g��|��R��X���ͧ���m���h��!ux�DHb�`�P) �
�j�r�\Ϻ�-�n��wW�ǣGS��&�q���i~;z�v|g�ž�-����Fk���2��y7�E��ϓ ��fm��X��O�~'�~-�:����V�n��A�5%�$G���T2��s�FЪ�@�q~~��~��/�-t��oA�Hӣ����],i�:�-��9r��� �"��X��A'؟�� ���'��O\X��+|T��i��N���q�(�,Z�V�x�FiA!Y��#�Rr��ѥNo�w�]]7��ik&���U��w�%���%^2�֮�i�~k��Z)8��w]5o���=������.�}2��Ʉ�����H�y �DNUw0�A��}"j2���m����[�J	!l1d�Fݤ���PdFQ�c/�<�T�4�ҼY�]��0�V���v��a��PZM�.`-[���V�{2�}��B�G�q����S^_����Ĺ�����n�XD�a6�U���d�
���A>�U�y�~I�k4���mt�m٤������}bV���#�|@d;�/�p;�a�m��3�H�K#)p�Rq�p�Q_�>���7��6�����[��5��Vh
|���#Q�h��[<t�x{M�ޗ
XiM�6r��8m#�!.ʮT(-�$c;E}W5�#iS�?)���+!%����F��6�2�T����� ��o��i:���u���%��p��@�2��ܮG;X�o#?���:�}fkt���a*�H�������A'��3��ۂU���B��ThVf�ٸ�Rɜ��#��>H����K�������^i57�g�K�S�|��x�
[�^$��Kr�4�F�m�*3�����v4l�ۗ��_a�ߵ��� ��fC��Ś��[��.tK{'�uDh�	���S�>�RѹRZO̿�/~ ��PxoM�CX�<G����ts�=�TߐJ �-��T��S�K����3g�}�������G��VK������}���q,��2���;s^.ի9J���f������w�}�݉�(rݶ���;����n�^��Z�;�u燼wo%սֱ�8]�� gNwGy�%��F�ľQ\ %7�m�]���I�|sgy�/[�����Ьlmo�h�̉yu�BU�d�Č3�0<�oM��ړ\��Q�� h����>G��H�q+Ds�B�W<�����+E��P�5��.�]6��Iqx��E�D�b(xa��P� +���y�՝HS�wԛz���E�ﾝ|��-Jp��:j[Y?5}��5��b_�:��:]���'_Cn�6�^)��1�ڡ#��p 	��z�u/���i�횃MS�O�V�R���U���,
�9ܠ��+��� f��F� g}łxg�ܑ�uc�/���lnuW�C�J�3ʹ����n�^���ςV���t� 9|QoV�K�+���K\���i ���/��}^��jݹ��o��2��%d���{-W_�����T�t�����x���8�"��Q_��7�3�mwSΖ�ڲ��3�����&���ữ�?�V�X�kVԡ��e�ԤO7Qa�ث\M"*'������f�U8��������V�<�Je��I�I��Bi$ݺM�9%�*�ub���:KKm;�
5��C嵧�<�k<3.λ���j��Ӡ5��wEN��v�z���ӷN�<�ʲ����J�KD��6z/>����\^�3\]<�i�v�R� .�'�1�=(��H�5VW,��� �EzG�x�R��/<So�^]�\\C3Nn%��͋Κ5݁�b� ��1�����X�-��kR��p�n���KV,eVF]]?�\�=s�U�K|���Oa������k>|��H<��Hf�Bs�B~�|C�ey�{����[]����ʐ��;��;�=�S��o�95�����X�������~�ڏ�͛y4�/��X�rq�?�j/۬z:�]��s��k	����Pʪ��t�UGLYA������P��V���Y����#�攒�t:�8񏇿�|y�=��i�:�M�o�b1�z�u?�օ���M|1�m�]x�G@XnZ� A�~�"��zO��q&�� �}�R��b�q�:z�w�h�x����5b�_�m�qs��V~:37s���������?�}B����t�=6d��( XcI7�v�]�'�I=�����E��y��Z������?�r�X�}��ơq,�[�8|���d$H?�#�y��W���A�ۣ��律?�#��n��,��$s�`g � �v�L�W���{sɊ���� �_�n��|@�t:�ժ� gNl��=Ŧ���S�\�3�n��+Q�_��4������n4�_��8�ф����X�儒�E
(َ|��� ��g7�5��_�����N��N��9/^%�W�kɹ��~�f�Tg������~��4�|A�j�����]�>�l"[�����0�|�Q��[�2[����0�T�>H�om��]Z����)Ж/nH���M��ֲv�W{&�I��<$^$���>�C�͍ž��������"F�����``�N�.Sw�t�w�����h����=׃,��+�j�t��.��E�bA�}���J.��$��c�g���q�����i��K��o�A,:p���H�1O8T�8�J7F�����xw���n��?A�-uI�M]5t�B�K(y <����1�<f#�^J��J��6�oJ�i��쓺v�oMn��NGï3Mʤi�I+��ٻ�E7d�ۓ�WW��~�� �7į����Is$7ZT}�����[u�� #��%�%F�9�����-D�OG��{2�ۤ�o7_��v7���'A#��*�E<Ȼ=����j^��a/�,�n�e����k[�27�2*��^<ȧ�ݽ���Aw�o�����~+��+ĻK��KȤ����"�C�,�lۥ}����$lI�=����`�y>�����Z�W�܎�/���<>������˯U����M��le~���� ��\]KR�5D�a��򠹊9��1{7ʲ�m�U��w����_���hڀ�G������oL1�\-�;̙mI�_1�޻"duC!9n/��N���0���j,0_m��M�$pF��|�%�n)2��9t��V�u��|'�	<U�xV��� J�k�Hn�2}�U���j�Y�;JE2����b)¥k�㺲~N��KU�M5G(�{J������r� �c�o�Ě-�έ��v:K��Y:�E� �[��HKG<�$`;�$�(�C�|G���O� �H-�/�_xw�^��t��4�c�����
$���Z8D�[��[2L�'���mcL�|D�<?�ɨ]i�f��V������Hd�)cR���Ioq5��~Ή*�1�o}��ֿয়�O����^x��� eռ5�[��z���{mY�|�p��b&]Ar�����ʝk�^:�+h��=�ߧ[i�q��.����V�mյ�C����m�yѭ�0��O 4�����ݕ?.OLd�_�v?��1�C�l��_�ݼU���\�/�Mu>gݷ�aX�Ö�;��PW�� �Z�`����ޡ��:F����"+��|�����_"9�ά$�C�`N�_�?~
��íKV�A�T�|+���<;��yD���ٕ��y%�����-�M����K��x� ���?~ֺ5��o$��>� �~��+os�.o$*̊#a ����?b���o��6���ּS�*���_�x�Śƛ��o�Me�4�(���D��L�+�
�"�I�� ^�	Y#m�{���eY^Z���o~8�����K[x}o4�e]ʡ|Ɛ��i�,V߰(�S��e����B�N����=Zy��h��E�s�V�}�]�Nݑ*�2g�ڷ�V����8��;K�Zj:R%瓾u�.�(���Y]���U��Wʟ��]��%�G��Z(#��U��W�q4����|1f�q�@#�C>t�������%g����{Ķ�t?ZX}�o:[h�?ږ�}Ԇ�b�����7�+N�-Ƕ� �Et��� �j�[}������Px��/�����:��>���^����	��K+_��Z��������$�;�>@�K��ģ�C#�K6rx��q���L�<��kku�<Mh�nw��0�w� N8�����+��>K��m*�Z�o%�M��m���K�O�h��v��k2��N�A���%|4����k�
���5���A+-d��FFч`q��p��M��]���<��@���:�{���"I&,�I#i <����_txw�6��4]&��-��[ډ$��)w7RB��"�ti��,���ޢ���]��o������&eMшՊ�Y���$�Ġ'�}���/ß���;��ǉ���w֚(����>�z�v�&\�YipA����}�����������Mc�jWp�3Y��|ƌda?{"�s���>���:eݽ����M�Ϯ���m[)U�6�.Fv4����@�1�jF���E�g�ڌk�6�$���G	��W9X��Ip3�g���?�(�ƻ��'�očZyf���t�Z9�-�H�����5��c�_��P���o���Mȡ[��ߝ��
˻�<�X�8���������>0(��)�l|��%� {�s�g>ٮ5M*U�;}�Eʬ#�3⿀�q�|2���m3/�� ]��+�� k(~���?o�k�Rw�񯢼7�i��v���;��'��'$�$b���z�n|S���[� �~��K�;�)
���A��x�����M�b�wݗ� f�k
��47��S*5��RB���!�fӝ��# ��_�Ή������6�k��{P��(c���4�J�Է�@pNA;w���yo����\�����sJ./����E��ǽP���E�����n��Y��o�k:��;� �%��}�Y���;x��&E2H�F�Oy�G��o��'-����R8�nn3�y��^bR���a��u`������}伏��|���=k���^xOI��2�q0>��5�P�@�ڼ�'���khUV6�� N �Q���d���*��(��\23c�zڻ%Q�sόlS�ek�fgS�	��Qۧ�c���?~�>,�5�j�x~�Z�ز��k5���#nr�0�\��m�����?1��7�e���f�� ~Ӿ<�ԭ	ڋ�],\!�<�v�X�$�Ջ0�
���2�l$���~'½_�:}���M�xJ����HQ��S��&3"�����e!��	_����L��� ix9&���_���$���!B�me�G5���P|S��+���f�mk���_M������[˘'�����D�a ��H,_c~ik�&���\Լy�R��NX�[��vcVWl��Zf2T#��8��n[�Eø��jʣ�+Qv�kT�}Wm�����K���Oko��v:�d��cAf�6V���\�n$�7n������O�Ǌ<N�]�i�$��ݯ�e��6�,��g�`�o�b��3�g�3l��|o���oV�/����kKM,��P�����ܗG*�R���L���ֺOY����ֵ�ˡ�����jw�j!�R���t�e��f��9ed@�	_!��z��o�=���++5�iz���a����Y�J���I��{��]�Yt8�ߴE���6��{;/VV�K�Qqw��%�ĳǘ�*�,{b��x��u����e�v^~Ϳ�n����/���V�_�=(j�Opt�v��Ei"%$gX�ɔTEX� =|k� ߿���xW�z�x�V�5��4�+��RuK{���w��p�&���.^8�����]��<;�;A��;�{km����C-�{�y*����*#xP0��Tp��V�&��[]���D��U����0yb�F�[RRr�:��v��d��kw�M߅�ƿ���~h���g{k��"��N�[���kk��R_%d\�!�{>�	b�ŉ��� i���|����L��k�5D��_�"�dTc2�/̓p3� �M~K~վ3׼��&����ukhf�ӭn��@��y�_*�!I
����/��G��K�Ae�d�\�c��s�}�rs�W���R��W��]zzh�O�.�$���e�R�����ՒI''�������wo��_�Z_��|K����>6f�c���kj}�|�pķο)���^q������haF�� ��Q�<����k����'{�x�E_��ZJN�S�|��b��MS]OD���cumۗ�m�#��5�`�Ni�������ls�+��������O/�%6�����(�V;w�8S���Aw���$��I9/+��h���r�5��|R���<Z��e�-���'��R6��.~����Ġr=���ӌ�ܗ��3�U\�v�������d֚�֙=ƣ5�\.��
�'�3��;��?������;�4��꺬��c����zn�C�P=r� �K_	��~'֊�M3JK@��+�݇�9�o�(��m�� �C��mo^��n�\d1�{m�(?�;T�ДS�TT�cUA+/�*�F�3?�i�K��Ҿe�<��l����K��5]�z���q�#5�|G����_2;{;{�d��	�!z�o���=���H�N�N�����I���M;T����]�#��� ��|�-p.�g��$��ͅZKp�B�Db���A�!I �HF_γy��[��E��?N�q�z���E^�/�{w9�rY~�M�|1���%��b�E�Ktp@]A�Dtr0�$�k�����o��o�..Z��s�Ϥ]X�mug$[�˳��`Ld���w�_��u�x�M���Jd�8����2�����7 ��r��MG����ּk��6���J��u頼�����v�C
���ɏ,�iX�;����.u�����ko_�p��7�K����uG�~�t���%�Ŀ\\,z��|]�x��ׅ�Ky�m�c���22��3����_�.߈�|Q��߈�K�y6���-D�Aؐ��U�eP6��M}'�KN_���<���2i�����ү,�W6����l p�� d(�&�p� ���&�����Qx�4�Fɔ0��R�'�c�ֽgR]?��w�v��ǈ�Ty����x-?�T|>da� ,��*[>���D �q�Q]�)��|f�1XɖK������Ex_Ư������a��SK��
Ѳ��1��I?��Nٯr����!>w����G��� �.�����,wQ���P�w��Nq�>اRV��N.韊� ��Iy�Z����\-���&2�v˂��_��Yz'��Un<�dx��FLd.r?c<�M�Kxn�ſ�7����{���{k��$� Q�@���`�2j�����[�-�R�/��p�[�w8�O,�c$�\k��w<��ʺo��b��=�VI#䯓8����3�J�7��y������,�k�־U�ǃV�E)f98$��v�ҸO��m�k�MGŗ�����->�"d|��n�h��<W���>$���� 6�a�Iu��Zǯ�ZIlͲ�SM��p���p��k
��H����X�����؎�-�qP�Z���^\X��j��;[Z��Iq.ӱ��)l�8����.��|�����v�ϵzOUc�?"?nO�
�u=/�7�d���}_P�-A��f�-湗d)��;�F�DX[�(����C�x�L�h<t���X̷r���V�?2Y.-m�[y	E��l�۲��X�b5}��F�ֿj���T�.��:����/,V6��Xt�uK�rʥ�:U��Hƾ)������t�o�{�x�D��ŕ��;�_j��H���+�_ryϰF��
@G���NT����ɭ��۷鱳��ok���Z���<k���c���V�u=J��ǣ��-4�Q���2����R|ƍI]��%������� ��;� G��-`�{�&K�y�y$]�Tq��!��İ ��?���{L����YM$��6�q-�(�9'h.,0D��#ј ��>p�ᗉ,<u�G�I��1�u��Z~��B�f������7Hb �* m�?��ƕ�PI[����]��{�m��.�)���RM>V�i��S�[�V����c�M���A�m�ҧ���y���p�|
�l�+�+ $�a"�>b~e�y�\[x��:�L��u�4]QgKUx�Ž���9J�7n�ކ� �'��vcX������]6��,�.�q�JKnu]�1��Ξ��K�_5j~:�ՔZ��/�V�������8�d��2D� ��)ʬ�q�!�����j��*�W��-������tc�-�׾� /������5�A�A��]ꒀa���@L.�6XܲJ#��@����Bݦ�c}⯈~��KG�h�4S�nm,����G"K�<;��#|��ےL��i� ��G�R����ŪBxk��K!fE����2${�lC'�"#+Y�w��c���5�w���|7���t��G�̺�x��S�peH�)e�xF��ԫVk�>^V�w�ɻ&֩�_M:%l�Ԝ�$t�������8� ~�ן�8�m�u[y"�U��W��t�L��!1�q����Iv�*}�t�K/ɨi:|Z��Km)�H�j�RK6�eW��!@\(�?�sS��|��v�c��]��6�gl�	�@��.ဏ�*��r ��C���"�h��oO�`�.��۪Y��������cG�l�A��5�tW�w�M>����yӄd�ʬ��O���� ��7���	-c���O_�6�3��\Z$�$��0s�U� ^��
G����������O$�c����r�2:f�����qgj��#rq��瞧���[���~�kN7Lˌ�ǟ�z����#�Wxb��Z���ڭ���¶��+X#^�p�Z�<�;��>_zɳ��Uf����.��$�2� 1�=r	��S�l�]&��k���f���d�H���}H�qY���U4��i;EsI��QZ�l�Ҝݠ��㱡-�6P��G���p��,O��
�������%ǆ#�-t�i�wڀ�P�&�z�#=�,��$.��L"��W�z>�k�M")�k=�¬�dP��I�a�A�0�m������T��|���w��q���?��/F��2�ʎ"�1XYsBi4����O�Ɥ\���	8Mj� ��>i��o<I��Y���Z3�rD~؛c��"H� գ�[h,N��?��ë�xk@�2l���q,�~c�%�J��i�KH��N�9�~Ӵx4���5�uƫ�Tg�:APjZ-��sc,��lnV�1�7��S���T���j����t���!��=J��f�uz�����Օ͟���'DFA�5�2 �� q��=8W��Ϡ���A�\��3O�?-6���55*9������?~j�&��|N.��g��O����}�{1O.8ӻ}�W���vo��;�~ё�Z�o�X���ymc�.#�U>sH��#f=@Q<�A_J|K-���e��Wʿ��Q#$���<� �P�8 ����O���+�����K%������%��A��v�
����	�q����'����|�g�=.8���į|���.%� ��o�����j� <h�7n�o�>���O��Í'�?�n|7�[���©
a��8*@����h�gß� e?�Z��jZ�����g��-�Y�C�~�~���%���ta� ��3�����/xoE��]2��4kmq���JUK��a���p���� uM3��]֙�[��%��c���Ϛ��ňR��$[c�� �,����m����I!wܫ��*r�`p9?xJK��Ȱ����X�;d;�� ��U���r���K�v��o����w|!�~�j2C$�W�\<k��EWޫ�� �P۲9H&X�jM(H�t{�3S�@�xּ����iz�m-�!�� �G����T�ظ�8 ��D����a��_j�H��zf�D�x���'��}Q��v5o��1��_2��q��"�R?�����o*y2�ǁ_Ϗ��?+�ߋ�u])2;�������fVԚ0V9���I�%~���uW��{�e�'�t#a��A�ZeS�f��G��E\�F����=k��F!0� �޲�q&�c�=Bm�]k�.�2����l�P��3g?*�l\�O˞��F�I�1���?���
��������4Ȯn4]7NT�'�h�f�A�b�lG�T���_"��k��T���O�u9	�ݾ�K<77��T��fU
*d�Hs��� �?�x����ո��̦9�2�]H��[`�d.�� A���a�/��X���既��O��]ػCa�*��+t�±�+��3we�,C��u<����~�gI�f�D7�m�[jI�����u�{(�[��!�Q$Y4�ê#�)�|�|'�>�^��o����mu��_h���h#��E<:�$Z�n�l f-�"����ϒ|)����������p�\Co=�k��ɍe!K)�mi7F8���� <7�[|R��;i���oM�H��m�ng2Bu'v]T�qGQ�P�[R�d�v���]t릖�w5���g�~��ρ_o|;��2��x/�:޻�����L�L P�� ��,A���e�W�ɱ��O�<'�}B��^�m>&iE{���=ʹ3^!�mf> LF9SZ65�~���ƛ�� ZMj^��{}OV�����8㼸�'�V���0���4hH_�,������ ������[��|G�閉h���YZ.��۴+!��4[{�\�Ql'����F�[:2���Z{�E�]ZV]�����?-����5����ˋ��.��ie=2N�[�<��z�Ý?O�o�%�X_�s�F�y�}���aD_27?+1a��!�t��§�&�/�?�ks@��I}g"�B�85�Z1�%�{��t��<R�C����(e^J�p���
W�J���v�����ɝ�^��c��k?�k�/�!���~�o�Eu� ��"b1��o�}k���L�]O�h��xG�ZA��2�b�hk����sb�/�<��
q�Kk�Wöq�ʼ�Hs�˷���w�� ���/$���o��tO����־�+p�p\Z���Ҩe����]Ԃ!��+?�&����F�̺񦤓N#a��t�pX+eS��S��霏����
\��۹�ԃoB?�&��f���-SZ�?-�I����j~�i�~�~������R����V��S,�� �A�D�5���b�-�[Ai��#��Q�.�cک|`�?��x�ό]��`I6���Χ����&���+4Ӻi���Ѧ��t*n2��=S�;��X�|eỢ��y��m�A	�h��rZ	272�!I8�9o{��w�Y��0����O����4�y0�ѱ�DgV��pm�o9��g�ݤ�^Ҽ+�%��#�%�uB�K�g+��'e�{��1�آ�=Z�k�t=Y_j�5ݬ�5�>.~S���zW��jʫ�N������֟3�r���9*O�O>��}~D#�� �!�.k+�^x�U-����kƱ��L���Ϊ����bX�)8���^���_��M�_h����h�g��=��I����`��B�xY1$d�7����^M��6�6��G�Z��'�z���6��mt�" �WDӐ��[q��=�k��s&׻n��n��}=S�[�w'~����OS�m#V�O�t��x��������tbY�.-7f�!DBp\6�b�8�o�*d��?�+࿉k-��/,%(Cyo*I6܎:A�:���_�c�����j���x��H��Ѵ�A,UUbRNՏi$�qھP� ��`�	~�� �L�5O�jSA��.�Y��Ÿ�:5������ �*�b��2|7'�y9Z�n��-�mZ]U�va��U��G�J�ꕴMo},�mY�@��m�Ǟ@n��(�6��9����EL��G�c�����~,��٣���sמ?�u��7�U�����7E�����X�9����������Ծ)X\jڴ1G������cqn� �Sך����|׼i��i$�d��c��pbl� ��d猂{����o����H���w�o�>8x�G�������ݼ��������`��p�a��8���T���Σ�}��	t�v�Ғx��͑ܳH��H�r{��W�_�G�[_�����F��mow1j:��3m�d���$�@��a�R>��{�<}���:ׄu?O���<Z���UUH��e�ݹ$g��R�~�����a˯�|C�G�=������t{;+;�	�;p���.�9˱,�'$��@���	G�;�WM��|?�i)m4�:l�4�񽼅�ݶ�Q��n�W�Z�����Qi��Z=���ڵ�$�}mH�2&$��)��.Tn����	�� �D��>.Zk�%��zN�g-��~�=�����`�"\���s�mB�Ԣ�u� Ʋ��^_������z��	�o�ぞ��H�o�=������]��5����V����y�s�:���Z���a4�yn����I"4�Q��Ѵ�2>u�u�-G���w�6��趾$��Ͷ�k�V8�Z�l���P:��r����Ud�' :���~ї��m�M�]\XëZ�iv����nee(�BQ$PT����w����������hi���gtVMFI�$����(d_��9Fk��ը�6�އD*8�t욕�-��������=}��vZu���d�$��=���(\�M�:&��� ���|���Zz|a��6������>��muD��Whm�0�����$��yoP�T}�㻻�]���罷�C3٭�S�Y�2y���#�w\+p+�?��`��+˫}Bo�Ff�kK��;��I�[��%W�����d��r��1Yjss�I���իZ�KY���=��9��������|o/��ME��MC�VC�Gkbe�o6f��G�iٛ(�l� U#ڵ�M�O�:~������o�iu{������[�[r�,%��2��V��[���"/�)�����R�>��Y����v����6̱<I��o,bAfN^}rM^Ӵ�;��x���jW�_��j�Z�[�6"4R��I���k�xW��a(%R�z���Z��ߥ�m�n���N3�ì_�����o��'� �춭᫫k�Cgqu�krI��4h�Ղ�Y�*	*?v�j��߂z}ޕuqk��s��׼A��jְ�[��}q=�)h�~�EF�v�t�Yo�Y��KO�����Gt���$a����ʻ����0�ȁ��0eb}��v�'Ko��{U��}��0����?�8�k8�2�6u}�,[��z��׶�����r��Wsow�h}	� ������k2hzU��}�[ŷj�:A盖A��Ity+� _gi�y{�[���[Ķ�Ѵ�"a��z�(���
��� e߆g�o�}77�)��Vs�%{� �N���t ��>#I⟇�K_x?�"��6{�����I���d��
��] ��qJ�*1P�o�~��q��R�v��v�������o�WK#�,.�-��p�r�<^T��Ӗ��˶2�	�����67�G$�Vr���n��J����n$� �~C������ |׬����cҴ��f�aK����Y�cH��	�� B���߅� l}sT��6�a�Kh�&�N�6����n�M:��)j�5���>b�����L4O�n����y���V��֊�T��[;mbe�������ڵ{?�'��U��c��Qt����!<�;�B�[q-+|�r��=Nk����㏋�����Z�u�7Z����9�n�&�-����G�kpK	d�
�Bb������Լk��xfg��n|?mm��$v�\Is�?�$Ό�󢷊 
����vn�ŵ�3����~,�����o�<oq=΃�|�̡U�D�m���e�&R�G�x�(�fj�:�5M�}T�gh�ZJ�7�+����&2�Gᕗ_�o�����G�'��w�X�փ�C�� hxOT]2��Bլ���-��;s�4�Ys/��Hdq���z�� ����HM�1���[�9�0O˜�
��.|�M��_	�%�]���_K.�G�Aky����*�Hv�xT&�W �|������O|I���&�&����,l��<�L-�{�{�ԡi�]�F�!Y
���C�P��-�ˬ��o�ܛr���m��i�s���_��K^��>�&pTe��N��'��#�5���E~�� ��T�_��x��)q�jMq���BK{Hat�HV��VKtA%����h獙��0?����.��#�����w�hVwW2N�yf/���NrT����]��x���*N6���}m��|� ;����jѮ�+��&���wI�/�iu���m`���s��|�ϑ��W`LL>m��P�]��˞�$W�*�<��l�>0�o��߇�%�.t����na,�eTp����ֶ�x2�ῄ��x�[U]��˗
{�R!Z6��b@mǿˁ�ԁdP��y>�^Տٲq:���y��,c�F��̦D_kN�����SB�� ���y��u]��?��ni<�"�I��v��Q��������O���U�ӽ�p����8-|��f*���\DbRN3��~?�� ׿j�xVO�\5��͍� pb�N\��A�Ȼ��O�&��ƥ=��q��3�f�_�q6�X�窡^�6#���?o<Y��c������v�>�Wc#��Pv�I��>Ҝ����փ�Yj�*k�5���~M��K䐪��q�`2+�u
�;ˈ��>��d�+���;�J����G�V�>�m.��I����)˵�m_2@��c����t��~(x+��񎩢I�j�� O��"��c'�[�T=@= ��Ҕ^�1�J;���{��y#����e�/�� �ˎ�^���c�zW�/��bO|�^�$�4׺&�v�G.��Z�́��' ��@9��O�%����?i�RR���\h�1�n-Ze3Z����.H�#�o߯����,�͵�4Vv�E�P!o���F{�
��IƬ��0�4SGK����c��5m��������mn޽��A]�0�	5�ٞg�c��%~lc>����m�q�U�VS�}�Rjdm� m5~�	�h����ι㏊�tyu�k?V�iPy��?�	r�FmU��"����԰'�� n��_�߳o������o<]ym���\���\��X��R�Ĳc8��������~��5��Ӓe���Zt�΃G�) y   ̑�'�.�"�g�w��|g�L��m�@��Kk��am.c�,[�(72��ϖ:��O}4oJ�JH���O�n5��CX�}ׁ�/�9m$h���K�3��l�"��[͌D�w��x�����u}�E�Ƹ�t��^���DqH���-�E��@�0�H�����iDrv?����ōP�-!�@����\h�$�p����qm����8f<C������2��c�H��5�#�d�V0�P��P\Z�)o"�24���J� RW�O�Ŵ��]���~�f�%-;?�o�5���.<S�I��4��G�-�/��u,��]�Ԍ� <�-b_�(�NB��k���2O���/Ǐ�	�y�;�m�ֻᏅ�>�%�q�&�Y���~�� *G"v�>����� ���Z�֟o�߈��閾�f����!4M�D֞T��	�G���)�E�#�3����gs� ������d���l�����2K��ʜ��}*���;�m�|�2�t잷�����9�����Y����·�j�>��{[�1o4S��8�b
�� �����.-�/x���F!����~jo�������#��H֭e�� �:�@o�oaMB�U �3.b��df�A-���A�����O�O\����<����4Q�Y�*��ɽv���#�v����D��l��8x�4��|w��ȿ�?��V����ZM5��Is-�C�$,Cz�2H �ֿf� ck�����}/]ݤ�B�)mo\G2/ڥ+�G�T�؃_�*�� 
���kI���u��M����	�vW���r=:Gc� _�4�r�[ٗ�/#���Y�Tq�a_� u�\sWO��6�Ȟ	��_�������h��m��>r�?:������t���i�N�y$>8�cQ���l�T[��9���8�	fA�@��!��T_�P�כ���J�xX$	#�H� �"��:t��� k_�G��g�m�լb����k�(��gAp������y�l0m���R���<��2��΋�\�Zͧg�2{���]l�����S�s��q~�{5u�}M=�?P�5� ��#��sX��J�u��:t��wO�2����<�ƊP�4J|�1�'�>��񦅮xu�mkE��m>c�K,��\6*�8;@8 t����?�cs�� '�5\_ɧY$�i���i�%�N�6����w��C#rq.� �~� �M�=�>ۮC��v�4Fh�b�o��E$���Y�d݀v���ds����x��4`�u��M]�۝�&��i{��x
��F�#��9.W]6����7�k;��@�-�T���n6�M�e\���"����3q�Ck�y�xyT�yvw��1!	���QN[��zo�/�c�� <%���#����K�m6�N�����n]X+[�bve�(J8��$��7ĝg�>	�O��O�:.��6}2��e�K�(��,��z;Gs���efIP�(������9U��]-v�m^��k�Mlz�=,�R��
���J)+��m���[��tXXM�ZMud�{knʒM
�Hّd�>RQѰ�;X`Ոtg޿�U�5�� ���e�ִ��`д?���*�ŨI��w+h��U����ǅ���2J��v׶\|U�mͥ��:Ş������\�j6�������*�gM�$��u�c�Ve��
��|]Ɏ���BR�����R����҂�u/qI���+�X�89�oSܻK���h�Z��+�h~�Z�����.���I�%v���>�W�?�p���Ŀ�H� �R�w�2i:�J�7.�k?�J��&������ 	���a�]:�O����ڦ�p.,u_*�$��`ʮLd�o�uRO�� �`�*�)� �a|n���c��_6�[i�o�Bk��8���ѯJ�ᒴ��Z�����䮣t��[|���p��h�]X�l<�V�������In�C���q�QY)JƇ�A�Ga{�O�4���v�U��@�	�T9��u�X��˵�T��ܪ=9��1��m>%ij�I-o�i�7̪pL����ǿy���f�|ɚ�%���2���	�;W�(+���#S]���v�e`����Q٫ox��K
��B` ��;W��Wp퍡kfrKe�����Z��>&i�����h�6�e��H�����o~�|��v85u<i��o��HU�1n�RN�\�=�o+�ֹ�Ѡ��s}l�N���u�%ڪb(�v�?�J�K�]6�}��n��d��[p�9`:u� �VT���S�0�32$�|����h�Z խ�+�{�3<�gԜ�ǯ'$�5��Ɗ7��u�孢B���Mͱ��\��]׿@2NF�Y�,�ދ���R�?�-m-�3?����]���?ҹ˽�2-�孼�.%�H��g����W�f��B��]�����䑜����������3��o������v���s�X\���R��1��5����3Hd,�H�R�pꤗ@����_��x�G��-l�Hid�_��J��I��MҔBV5��\����}C�S}�W�tj�(���i3�aÀ����[ u�y���O�~{]r�O ���ڑJ>�>" 7�{��l�q��c�QQV��3�j��� ���L	�Y�-5u��k�=5��im�|H�̻KIJf�>j���5�|S������\_i�����v��N��K�{}:�q$*�T�[s�P��W��*������=�i����z�|5�Y�\<��l���a�T�6�+�$��B]�F���3|��>�潥�f����GӴ�N;�����y� �<��|�wo9=q��9�E����{���ek�;�z�����f��~3x��e�g�<�������%���me�	��gѤ�c0�cx�VșI
"��?��~5��.4o{�����}`��q�{��uc�G���`4-_����&��
�R�խo-, I"mk̐H���8�A�V�|��w��k�'�46e��[�뷗Q�B����D����@]̄�f�5*Ҥ��7t�Z�۾�m���T0�כD�� �����?��k�;���>�yot��"{�N��=���lL�w�����F�lWUW*��?��;��g��ƫ�ZMJ����4[q��F$!�U���Ġ�R��f�`oxkG��6:Ė>	��5�q����7*̻�d�InUlj���K�|1�:Dl�Ҭ#ܐ&��鶖B0L�نܙ$%�'A��h�q��jTm+�[��[Gn�hc'/��hzW�|;q��3�V�wq�smn����M� ��dWź/�#4X�}}�C�C�����śi�s ���P>2_!|�.�Y��_]��6�[����M�2b5��m�A9+��x��k������kI����{��u��9HU$�i!�3��wy{G$�,8�R���������T����j� ��Cu����^1�=w�vz��|�� �O���a4w��7�k%�r�<��ηy��L*o)�>�>�㶩����9�����$��Z跩LdK�$�o,B%	��V��I�����_��E����e�q,k�����K����m����f�7wC�#��j��9�xk�^ ��sjvov��e���H���GM���4����isʭ�>u��+��+I+�[���^�y� Xs��Mo��n��m��� �����o��o��M��ό���P����Ӯ-�o6��ۆ�Wr��"�o:��gc���������⇅�7ǚ���bH�ҴMA��=�H!�@�idImH�,�c�D�F�{�3ඓ�� �� ؗ���	��A����e�@� ܪOV �(��w�0Iៈ^*������m%�����f/5�wڈ�c*�Yd_,�v�y�2\5J1���V�]�wv���ݎw�vQ[[�|��mCB���G�C�-6O��ĒXiq��Zj����m,�O�©��F��k�a6� "I_ۤ�ߨZ|M�����|7�,���ȵ�4��T,�o�q4�H��)"��?�b������<W�(���i1�[E���J��H�5iٰ2�#��r�}��P�ޭ����������sn������.]�F��3|��wpYc*�W��Z���ݞ��[f�&�Ɥ��%����/�$�?�����A���ϋ��n/#�o,�T�NB�Z��a-�Y�v��s���Wqe���Z�F�ҭm��V�%�+H$p�r@�  c b��l͎����ڂ3�m
���`:�W��.���-GZ�/4mq�<�$��R˴�m� � ���kZ�[(��y��U���Q�x�ͦ�������MK�{C��?6�m���fY�����_�4�>Yk�*�7�����w��t�+���j�fEee�'$8�IU�A�|	���p�=��md�]<ut�D�3�� @e%�R3���'4����|��`��Ϥ��bUU�i	��c �s��j�y�r&�w�� ������X��,���Z<�"������%�-���Ҡs�,F�݁�E?3>[Ԯ~/������*��npq�W��~�ϥkO䓷���z����"���i�-�-f�Ry6�G
�#"?��
�g�ȮgW������munn�Ɇ{Gm�V�3��8�
GR�V񝽅ŝŬ2�J�UU� `H#�x�i��6�P���f��4�>I�>r#x�Kw'��'�Mo�"˻V�e럵#c�?ιGצյf���>F,ے2	ۀOoZ��x�����w�_x��
����9�ӎ�«4���v�ǯ�v� ��\��֬F�߅�L�'������� ß�Z8��u���A��ܰ���#��<��g\�Y���t�j�U�|���,7������q5�A}��M
���3�$fH_*�i'?q�a�+�r>S��K��"4U�|}��	_��{\���ķ�l��t}~]�ʼ�]D�.@
Tl�&Q���>l��pܼ,�zu���][k$j�eI0#�$q�YZ���t�t՞k�A0�{YW���89�j��x��m8G�$�X�G�>\�p� ��l�*����&�y�-�=Ox�Q�B�)���E:?%T�V����V_�������Hb�"En�b��:��=�iGĘ�$/�y'��ǜ��J��ߐr1����l�_�[��O6р3�1{~?�5��-�h�w�I e��Z�/���Ϊ�,1\�Ib�5�9��  \�Ġ��8��>6���6ͤ�[�8|K-���0#���e�?{A�V��<�x��K����h{��8��\Bѐ-��c�p?6U�H��w�|��� ��_�ߋ�ڵ���z�m��5�1��A�cpW?( a�*>����{��o�� xa���.�Y]q���f\ �X~��P+�ϋ� �K_������|Ape	��j��O����)#�"ƈ��Fq�qP��/�>�$��q��?�?��ǡ�Auǆ|A2��;���ZI4�e�J�y.0�����-���=�#�_|A�x�N]�R�MZ���^���Kk��=�:�B`�D��Q��W�����������G��P�R+�-�G�\DX�BnI�s$��I��ʲ����~�߳���o�X𾋫kM�Ŕ�qZjJ�mTy 2�2�6��p��ܪā��1x��ң���u����ZosIam�u�>��O�o� ���������**���kY�x���`�x�S&Ii�32y�_�O�(gǏ�h���7'�5;]GM�u?�Kȭ"$0�"�2IS���ks��<׭���[�w����|:�\�I�ѡ��>a�v2H�ߥy����>0�E.��[='�Z�7�y����Ȓ�9Ò�Pʼ�KWF�Spt�k�.�����������7����
I�|���~�f��Kt��Ph��j�-�yg�U̘�@Mh��1�|���(Ѷ�3I]�kxy\����c {�� ����Γ����}�.���\���h^,[�e)���0���� vٖS
�����F���g�{�ͽ�8�#�$]��+������������>X*o�����?
�������+���V�&����ݻ�E8+4q�3��|����> ͪ����^������Isp�38'k'�BbFQ��K+o�L� �n�a�W�nu?��b��%[�h�[]��X�YI$������1>=ip�#Լ6cf$�k0>�\���8�k��J-�v�����x|=Oi����WW[_]�Zٳ"�F� ��w(ԛHV�`h&�t�MBh���$��4��b0��wWz���1�/^�7�":����ޡ���ux��Vh�E�X@�apʨ\Q��-�j�o��<z�o�^�ղ[��y,k�(!�d�b��Uפ����mm|P�:�Ol���4Ⱥ`UY[v��g`B��Ē���V���׫J���m+�-5I++�d����������
�z��5&��B�m�6��z'��y^/�� ���>����ۋYƙw3Y}��_�[y � �ogv�	
IUo�xMG������MsX��톝j�:�GraV����� �bg���g#��?�3�_�|=��i.��8o�fѿ�i�K�+���,Ŝ6�]��p�$Y.���>��� ©4O�T}nHl|��S۬8�I@�q��
T���w��T�N)BQQ��m�-7u)8��mj�v���ѡJ4i`�JQ�UԪY�ɹsBRq����ex��e��g_�_�K�H~���߈��Oz����n�z\4�X��L�71$n��#S�� �7��ㄿ���
|+y�x�s^/�|C�6���K;+Do#i��Q����Qfc���)��6� ���5+y&���X�ϝa�-�[AT 2��bʹe�� W�� bۛ�����nOa�/�κ�Y����[ѥk�E}�o��O��V�s��T��Isk���R�z]&��oƟ���M�ڇ�~��������5��{a��a���c�h��XF+!Fv\*���I~�m���}���Fce%���kV�� g���;*����2�l�o���i�#r*��8�7�"��� Yx�Ě]�孭�z7�5��d�>R,�#���`��ӊ��p�	R���$�M&�֪�5��6y��q��?u������_�o��~Ծ*�?�閺_�uh$�!���Y�ĥ��mm'�WP&� F9� ��� �|)��\��Դ]r�[B��5��eB����YY�x5�6���k��h@l��>i�G=�5F������d��eX"s�����<�#s���*�f�zit�h���_w��|*bqQNr�.���u��Ym� ����,�	~�����k6>�h�@����4۾٪|�%�����������οc�� ������4�V����������ص�����ǯ=~�<�?�&�o�cv�d rsߜ�q�2>�4m�����3�
����:�s\~� ذ֢��b��v( ��{�V��h�m㸘I��n=���\����d��wgnQ����c�Z`F�"������OAߐG���_#������X���������֠����6���J��� �VLW)���B�����fF9ϯ�R��p�g�"����2\���z�$wEs;��3F���P�����#��M��ј�8���޲R)7�G�cf-����u�I�l���2��w��ǯ���`�f���2�5��k)�0���U�*#���buR��g �p1�U͍�^�[�X������t��bڔjh�h�⒠���i�>�)�5��U�u<r3n �6�9����Xx�KY�h/��� Xͅ�q��$�\VG�#q�<�C�@9�p�' d��}�-��%�bKŸV�H�-�9ێ��٠�����"��TY��O/;�`���|��^$�U׊4����R�ܐٶ��Ű�]6�C�W$�AQ��4q�UY�
r�<��q��1P�]4j�n�\c
7)'��:c5�/q�i�4ŗ�yo��� ����2N�v���_q%�7Z��ɐ4cP���P��;��� ejArT.af�pF6�#�<0S�c�j#k����2gj����G��~����ޏ�����}�����h�cV!����2@�nx�G9�O��\�_�ƭ4�ߕ���<��O�O�^�;_�"J�f��c+����<~��� �����O�g���/�Z�|�-E��mGTe�Z����C��W(J�,�@���J|���c���ED���kd� �Pڃ��C��;Hp=�+����>S��G��?�o��Z��j��q��mlb�!hcI'�(c>nT��8^��q�|� �ڣ��{��k_x;��J�E����SK��hM�*�����ڇ �_�w�������e��#T�͜�r3����GMG�=�?����O�� �~�Gs�6�П��!RZL�K<���� �_�c�����7��?�2�?�YY \���'�Τ_ۻ���aY��j��y<c�8S��v*��N�,e;����/�?�?E���o�垾��𩥉�2m\�� �I_�����Dm�M�N5
�&?�X�oy��v��O���Gk������o[O:Gq�� i�w1�#3fIn�FEݒ"Fc�<�2տ̗�����ox�]�����.$�b��+�=0��Ĝ��W�c��{��e_���� �Ic�}��9�ų8�''��s���� �7Ə�:>2��|#��ڤ��ıG�_�i�푒%iem�a�-����k�����#h�;[blW���2N��$
�q�f���eN�.&����+A���6;-C-l"B 
�ȁ�%���G#����Ρ�;mq�Ҵ�p�7FS*W=ryu�N���澒"��а9(���#<��
j��>팊@9=OQ��=8�\>�'_��{�Zm����+�r�-a�/���M�F#V�2��F�B.:|I�M>bkq!?x)?)��1�y�(�U~e���Y�\�:���g=�T���%�_i�v�pH 9�K��D�杄E��}ZMB��k2!��_x�e�.{c���s�\��O�(�f�c*�p' 6���ּ�5H�r�w�r2x�����x��\N	�:cҩR��*���{�dI���*���9�998�:~u��^˥�~��H�@P�R6ڣ���B�s�9W4��ΪcYd!w>�`���^��~�>"��?����aeRߗ^	��c�\=����\��uY.���VH�V���N�C�=m-�l�xKg�&�1$�8�qܓ���4�H�U�E�3��?w$9��n�Yea�+��3���UȺ���'�k�.�t��>��S��q�#���_�U�Z�����a�7��npI;��g���W�d�Eh�u�I,>n ��1N��$M���r�猎Oo§�&�]���(ܻl��2ќ�ĝA�9s��?�U��Ri�Tz|0�o�u>L��X9 [�1�rz�s��sq$[��A£�s��<����ROs�\\? �6�=��n��{� W+�3����6��MlR"���R�Ǩ�FA ��U}7�M,?o�T�T,����H�y�@�+��T@7;3d�2���v���G-����<���<��^��Fv:����!�u��1�Í�#���8d8v {�ߋ��I ��F�`���=�펝:W*�4�r�́�Q����2099� ,�,��������>��(�h=���E�*��J�V�ګ��F�)�X�#�^y�S�T���ڳG��ud~~e#����py9�il� մ�)!G������8�=٥r^5���R7N?��J=�i�z��k���yk7}�
�냷���T1|f�� HO"1�X�����r�i'���=I�i�nu�y9�l{�������}�=���
��8��Ӛn�v�=��v��u�_6��HT�d�����w����ڴ:�α��z7��^0x��Mb������P��x�'<�1U5�=u�&ki����'�+[?9�4`�F�C��f��%їO�˫�y� ��ۥ�F�GE�����$Cc� ז�D� ��xo����<Cuq����#����B�r�pl�ʰ�U?����~/Mf�!�c�!�C#{����ai
���w �l������ ���Mt�����iNۛt�S�#2*�Y�0Ae��۶�F��W��StzOď�������zn��Y�j�l�I�u���刪nuf$�W�b�$ハF���3�|N�ɢ�լwZ}�'���	��G�C������&�j�m.�2O��#\�V��P�\���|����x��_��Ŀ�~)h��O��$�M>�yW6���Xǁ����т	$���+����iGc��<�����O�W� ?j}X�~�ql��:6��k��$���H�BʞLc`R����_�& �GE-w��c�88b>����-��� '�ÍwO[o��牤�R�'�|9sy��2��,�
"yB�.@�3�0��^� �\>&O���k���I�E�Q�c��|3���Һ�b��9R�$����E�~{�}��$ۃ�1���� ���K�[?.A��W��X~/	��q��dV�I�4���v��>݅I� b��"4i�3x�ɒ�L�H��� �Ƿ9��㕽� ��Ȗ���S��l7
G��ͩm�͘q������� �?�~~'�G�u����<sn�A'�Ѻ����_�(���Vh-����4ԙ�ngmVo�{����(b�*q���������dK=��� ��JM����慡�<6ܐ|ȁ����������&�2����^}��7⇉l.��ȴ�Y�7���p� ;.썹���g"�wS��d��-ѷ�gn�;�Mpb�S��k�Xzs�u����/��|��b��ZEW||�O6e��r dd��Err÷�o�w�����8�~v���� ��J�������2y0��c��y�Oj�t��i��m��n �� _�+7�[,�p2�����Tԇ$�Y4�̮ni�f <��pKB��?���7�<�ݷ���($s���"�m�i-����h��|.���M&�*-�1�>Χ`oA�~���+Sr;�Y��Ҭ'�;Xz�8�i�}���k��F&�3�