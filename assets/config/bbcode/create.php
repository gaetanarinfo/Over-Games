<?php

// editeur BBCode dans un champ de type textarea
function BBCodeGetEditor($aName, $aTxt, $aButtonLst=''){

// 1- liste des balises reconnues
$tag = array();
$tag['fontsize'] = array('id'=>'bbcode1', 'title'=>'Taille', 'type'=>'select', 'option'=>[
['title'=>'Taille du texte', 'value'=>''],
['title'=>'1px', 'value'=>'1'],
['title'=>'2px', 'value'=>'2'],
['title'=>'3px', 'value'=>'3'],
['title'=>'4px', 'value'=>'4'],
['title'=>'5px', 'value'=>'5'],
['title'=>'6px', 'value'=>'6'],
['title'=>'7px', 'value'=>'7'],
['title'=>'8px', 'value'=>'8'],
['title'=>'9px', 'value'=>'9'],
['title'=>'10px', 'value'=>'10'],
['title'=>'11px', 'value'=>'11'],
['title'=>'12px', 'value'=>'12'],
['title'=>'13px', 'value'=>'13'],
['title'=>'14px', 'value'=>'14'],
['title'=>'15px', 'value'=>'15'],
['title'=>'16px', 'value'=>'16'],
['title'=>'17px', 'value'=>'17'],
['title'=>'18px', 'value'=>'18'],
['title'=>'19px', 'value'=>'19'],
['title'=>'20px', 'value'=>'20'],
['title'=>'21px', 'value'=>'21'],
['title'=>'22px', 'value'=>'22'],
['title'=>'23px', 'value'=>'23'],
['title'=>'24px', 'value'=>'24'],
['title'=>'25px', 'value'=>'25'],
['title'=>'26px', 'value'=>'26'],
['title'=>'27px', 'value'=>'27'],
['title'=>'28px', 'value'=>'28'],
['title'=>'29px', 'value'=>'29'],
['title'=>'30px', 'value'=>'30'],
['title'=>'31px', 'value'=>'31'],
['title'=>'32px', 'value'=>'32'],
['title'=>'33px', 'value'=>'33'],
['title'=>'34px', 'value'=>'34'],
['title'=>'35px', 'value'=>'35'],
['title'=>'36px', 'value'=>'36'],
['title'=>'37px', 'value'=>'37'],
['title'=>'38px', 'value'=>'38'],
['title'=>'39px', 'value'=>'39'],
['title'=>'40px', 'value'=>'40']
], 'tag1'=>'[size=$1]', 'tag2'=>'[/size]');
$tag['color'] = array('id'=>'bbcode2', 'title'=>'Couleur', 'type'=>'color', 'value'=>[], 'tag1'=>'[color=$1]', 'tag2'=>'[/color]');
$tag['bold'] = array('id'=>'bbcode3', 'title'=>'Gras', 'type'=>'button', 'tag1'=>'[b]', 'tag2'=>'[/b]');
$tag['italic'] = array('id'=>'bbcode4', 'title'=>'Italique', 'type'=>'button', 'tag1'=>'[i]', 'tag2'=>'[/i]');
$tag['underline'] = array('id'=>'bbcode5', 'title'=>'Souligné', 'type'=>'button', 'tag1'=>'[u]', 'tag2'=>'[/u]');
$tag['stroke'] = array('id'=>'bbcode6', 'title'=>'Barré', 'type'=>'button', 'tag1'=>'[s]', 'tag2'=>'[/s]');
$tag['sup'] = array('id'=>'bbcode7', 'title'=>'Exposant', 'type'=>'button', 'tag1'=>'[sup]', 'tag2'=>'[/sup]');
$tag['sub'] = array('id'=>'bbcode8', 'title'=>'Indice', 'type'=>'button', 'tag1'=>'[sub]', 'tag2'=>'[/sub]');
$tag['left'] = array('id'=>'bbcode9', 'title'=>'Aligné à gauche', 'type'=>'button', 'tag1'=>'[left]', 'tag2'=>'[/left]');
$tag['right'] = array('id'=>'bbcode10', 'title'=>'Aligné à droite', 'type'=>'button', 'tag1'=>'[right]', 'tag2'=>'[/right]');
$tag['center'] = array('id'=>'bbcode11', 'title'=>'Centrer', 'type'=>'button', 'tag1'=>'[center]', 'tag2'=>'[/center]');
$tag['justify'] = array('id'=>'bbcode12', 'title'=>'Justifier', 'type'=>'button', 'tag1'=>'[justify]', 'tag2'=>'[/justify]');
$tag['img'] = array('id'=>'bbcode13', 'title'=>'Image', 'type'=>'button', 'tag1'=>'[img]', 'tag2'=>'[/img]');
$tag['video'] = array('id'=>'bbcode18', 'title'=>'Vidéo', 'type'=>'button', 'tag1'=>'[video]', 'tag2'=>'[/video]');
$tag['url'] = array('id'=>'bbcode14', 'title'=>'Url', 'type'=>'button', 'tag1'=>'[url]', 'tag2'=>'[/url]');
$tag['email'] = array('id'=>'bbcode16', 'title'=>'Email', 'type'=>'button', 'tag1'=>'[email]', 'tag2'=>'[/email]');
$tag['code'] = array('id'=>'bbcode15', 'title'=>'Code', 'type'=>'button', 'tag1'=>'[code]', 'tag2'=>'[/code]');
$tag['quote'] = array('id'=>'bbcode17', 'title'=>'Citation', 'type'=>'button', 'tag1'=>'[quote]', 'tag2'=>'[/quote]');
$tag['emo'] = array('id'=>'bbcode19', 'title'=>'Emo 1', 'type'=>'button', 'value'=>[]);

// 2- initialise les balises à utiliser parmi la liste aButtonLst
$tagSel = array();
if(empty($aButtonLst)){
    $tagSel = $tag;

}else{
    foreach($aButtonLst as $v){
        if(!empty($tag[$v])) $tagSel[] = $tag[$v];
    }
}

// 3- affiche les boutons choisis
$h = '<section>';
foreach($tagSel as $v){
    switch($v['type']){
    case 'button' :
        // bouton
        $h .= '<input id="'.$v['id'].'" type="button" value="'.$v['title'].'" onclick="EditorTagInsert(\''.$aName.'\', \''.$v['tag1'].'\', \''.$v['tag2'].'\', 0);" />';
        break;
    case 'select' :
        // menu déroulant
        $h .= '<select id="'.$v['id'].'" onchange="EditorTagInsert(\''.$aName.'\', \''.$v['tag1'].'\', \''.$v['tag2'].'\', this.value);">';
        foreach($v['option'] as $v){
            $h .= '<option value="'.$v['value'].'">'.$v['title'].'</option>';
        }
        $h .= '</select>';
        break;
    }
}
$h .= '</section><textarea id="'.$aName.'" name="'.$aName.'" rows="10" cols="60">'.$aTxt.'</textarea>';

// 4- code javascript
// ce code permet d'insérer des balises en tenant compte de la sélection.
$h .= '
<script type="text/javascript">
//<![CDATA[
var tagLst = [];
function EditorTagInsert(aId, aTag1, aTag2, aOpt){
if(aOpt === "") return 0;
if(aOpt != 0) aTag1 = aTag1.replace("$1", aOpt);
var e = document.getElementById(aId);
if(typeof(e) == "undefined" || e == null) return 0;
var s1 = e.selectionStart;
var s2 = e.selectionEnd;
var txt = e.value;
e.value = (txt.substring(0, s1) + aTag1 + txt.substring(s1, s2) + aTag2 + txt.substring(s2, txt.length));
e.selectionStart = s1 + aTag1.length;
e.selectionEnd = s2 + aTag1.length;
e.focus();
}
//]]>
</script>';
return $h;
}

?>