<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Grimm</title>
	<style type="text/css" media="screen">
* {
	margin: 0px;
	padding: 0px;
	font-family: FreeSerif, Charis SIL, Cambria, Times New Roman, serif
}
body, html {
	padding: 3px;

	font-size: 12pt;
}

consonants {
	display: inline-block;
	vertical-align: top;
}
vowels {
	display: inline-block;
	vertical-align: top;
}

table {
	border-collapse: collapse;
	margin: 2px;
}

th {
	text-align: left;
	font-size: 10pt;
}
td {
	font-size: 12pt;
	border: 1px solid black;
	padding: 1px 2px;
}
.grey {
	background-color:#7f7f7f;
}
.noleft {
	border-left: none;
}
.noright {
	border-right: none;
}
input[type="button"]::-moz-focus-inner {
	padding: 0;
	border: 0;
}

.button {
	width: 100%;
}
.edit {
	border: none;
}
	</style>
	<script type="text/javascript">
var active_input = "";

function focus_input(inp){
	active_input = inp;
}

function typechar(ch){
	if(active_input != ""){
		var inp = active_input; //document.getElementById(active_input);
		inp.value = inp.value + ch;
		inp.focus();
	}
}
	</script>
</head>
<body>
  <h1>Grimm</h1> <b>Home</b> · <a href="about.html">About</a> · <a href="add.html">Add</a> · <a href="../index.html">Neurergus</a>
  <hr /><br />
<form action="search.php" method="post">
  <consonants>
    <noscript>You have Javascript disabled. The on-screen IPA keyboard will not function.</noscript>
    <table>
      <tr>
	<th><input type="button" class="button" onclick="typechar('C')" value="Any consonant (C)" /></th>
	<th colspan="2"><input type="button" class="button" onclick="typechar('[bilabial]')" value="Bilabial" /></th>
	<th colspan="2"><input type="button" class="button" onclick="typechar('[labiodental]')" value="Labiodental" /></th>
	<th colspan="2"><input type="button" class="button" onclick="typechar('[dental]')" value="Dental" /></th>
	<th colspan="2"><input type="button" class="button" onclick="typechar('[alveolar]')" value="Alveolar" /></th>
	<th colspan="2"><input type="button" class="button" onclick="typechar('[postalveolar]')" value="Postalveolar" /></th>
	<th colspan="2"><input type="button" class="button" onclick="typechar('[retroflex]')" value="Retroflex" /></th>
	<th colspan="2"><input type="button" class="button" onclick="typechar('[alveolopalatal]')" value="Alveolopalatal" /></th>
	<th colspan="2"><input type="button" class="button" onclick="typechar('[palatal]')" value="Palatal" /></th>
	<th colspan="2"><input type="button" class="button" onclick="typechar('[velar]')" value="Velar" /></th>
	<th colspan="2"><input type="button" class="button" onclick="typechar('[uvular]')" value="Uvular" /></th>
	<th colspan="2"><input type="button" class="button" onclick="typechar('[pharyngeal]')" value="Pharyngeal/Epiglottal" /></th>
	<th colspan="2"><input type="button" class="button" onclick="typechar('[glottal]')" value="Glottal" /></th>
      </tr>
      <tr>
	<th><input type="button" class="button" onclick="typechar('[nasal]')" value="Nasal" /></th>
	<td class="noright">&nbsp;</td>
	<td class="noleft"><input type="button" class="button" onclick="typechar('m')" value="m" /></td>
	<td class="noright">&nbsp;</td>
	<td class="noleft"><input type="button" class="button" onclick="typechar('ɱ')" value="ɱ" /></td>
	<td colspan="2">&nbsp;</td>
	<td class="noright">&nbsp;</td>
	<td class="noleft"><input type="button" class="button" onclick="typechar('n')" value="n" /></td>
	<td colspan="2">&nbsp;</td>
	<td class="noright">&nbsp;</td>
	<td class="noleft"><input type="button" class="button" onclick="typechar('ɳ')" value="ɳ" /></td>
	<td colspan="2">&nbsp;</td>
	<td class="noright">&nbsp;</td>
	<td class="noleft"><input type="button" class="button" onclick="typechar('ɲ')" value="ɲ" /></td>
	<td class="noright">&nbsp;</td>
	<td class="noleft"><input type="button" class="button" onclick="typechar('ŋ')" value="ŋ" /></td>
	<td class="noright">&nbsp;</td>
	<td class="noleft"><input type="button" class="button" onclick="typechar('ɴ')" value="ɴ" /></td>
	<td colspan="2" class="grey">&nbsp;</td>
	<td colspan="2" class="grey">&nbsp;</td>
      </tr>
      <tr>
	<th><input type="button" class="button" onclick="typechar('[stop]')" value="Stop" /></th>
	<td class="noright"><input type="button" class="button" onclick="typechar('p')" value="p" /></td>
	<td class="noleft"><input type="button" class="button" onclick="typechar('b')" value="b" /></td>
	<td colspan="2">&nbsp;</td>
	<td colspan="2">&nbsp;</td>
	<td class="noright"><input type="button" class="button" onclick="typechar('t')" value="t" /></td>
	<td class="noleft"><input type="button" class="button" onclick="typechar('d')" value="d" /></td>
	<td colspan="2">&nbsp;</td>
	<td class="noright"><input type="button" class="button" onclick="typechar('ʈ')" value="ʈ" /></td>
	<td class="noleft"><input type="button" class="button" onclick="typechar('ɖ')" value="ɖ" /></td>
	<td colspan="2">&nbsp;</td>
	<td class="noright"><input type="button" class="button" onclick="typechar('c')" value="c" /></td>
	<td class="noleft"><input type="button" class="button" onclick="typechar('ɟ')" value="ɟ" /></td>
	<td class="noright"><input type="button" class="button" onclick="typechar('k')" value="k" /></td>
	<td class="noleft"><input type="button" class="button" onclick="typechar('ɡ')" value="ɡ" /></td>
	<td class="noright"><input type="button" class="button" onclick="typechar('q')" value="q" /></td>
	<td class="noleft"><input type="button" class="button" onclick="typechar('ɢ')" value="ɢ" /></td>
	<td colspan="2"><input type="button" class="button" onclick="typechar('ʡ')" value="ʡ" /></td>
	<td class="noright"><input type="button" class="button" onclick="typechar('ʔ')" value="ʔ" /></td>
	<td class="grey noleft">&nbsp;</td>
      </tr>
      <tr>
	<th><input type="button" class="button" onclick="typechar('[affricate]')" value="Affricate" /></th>
	<td class="noright"><input type="button" class="button" onclick="typechar('pɸ')" value="pɸ" /></td>
	<td class="noleft"><input type="button" class="button" onclick="typechar('bβ')" value="bβ" /></td>
	<td class="noright"><input type="button" class="button" onclick="typechar('pf')" value="pf" /></td>
	<td class="noleft"><input type="button" class="button" onclick="typechar('bv')" value="bv" /></td>
	<td class="noright"><input type="button" class="button" onclick="typechar('tθ')" value="tθ" /></td>
	<td class="noleft"><input type="button" class="button" onclick="typechar('dð')" value="dð" /></td>
	<td class="noright"><input type="button" class="button" onclick="typechar('ts')" value="ts" /></td>
	<td class="noleft"><input type="button" class="button" onclick="typechar('dz')" value="dz" /></td>
	<td class="noright"><input type="button" class="button" onclick="typechar('tʃ')" value="tʃ" /></td>
	<td class="noleft"><input type="button" class="button" onclick="typechar('dʒ')" value="dʒ" /></td>
	<td class="noright"><input type="button" class="button" onclick="typechar('ʈʂ')" value="ʈʂ" /></td>
	<td class="noleft"><input type="button" class="button" onclick="typechar('ɖʐ')" value="ɖʐ" /></td>
	<td class="noright"><input type="button" class="button" onclick="typechar('tɕ')" value="tɕ" /></td>
	<td class="noleft"><input type="button" class="button" onclick="typechar('dʑ')" value="dʑ" /></td>
	<td class="noright"><input type="button" class="button" onclick="typechar('cç')" value="cç" /></td>
	<td class="noleft"><input type="button" class="button" onclick="typechar('ɟʝ')" value="ɟʝ" /></td>
	<td class="noright"><input type="button" class="button" onclick="typechar('kx')" value="kx" /></td>
	<td class="noleft"><input type="button" class="button" onclick="typechar('ɡɣ')" value="ɡɣ" /></td>
	<td class="noright"><input type="button" class="button" onclick="typechar('qχ')" value="qχ" /></td>
	<td class="noleft"><input type="button" class="button" onclick="typechar('ɢʁ')" value="ɢʁ" /></td>
	<td class="noright"><input type="button" class="button" onclick="typechar('ʡħ')" value="ʡħ" /></td>
	<td class="noleft"><input type="button" class="button" onclick="typechar('ʡʕ')" value="ʡʕ" /></td>
	<td class="noright"><input type="button" class="button" onclick="typechar('ʔh')" value="ʔh" /></td>
	<td class="grey noleft">&nbsp;</td>
      </tr>
      <tr>
	<th><input type="button" class="button" onclick="typechar('[fricative]')" value="Fricative" /></th>
	<td class="noright"><input type="button" class="button" onclick="typechar('ɸ')" value="ɸ" /></td>
	<td rowspan="2" class="noleft"><input type="button" class="button" onclick="typechar('β')" value="β" /></td>
	<td class="noright"><input type="button" class="button" onclick="typechar('f')" value="f" /></td>
	<td class="noleft"><input type="button" class="button" onclick="typechar('v')" value="v" /></td>
	<td class="noright"><input type="button" class="button" onclick="typechar('θ')" value="θ" /></td>
	<td rowspan="2" class="noleft"><input type="button" class="button" onclick="typechar('ð')" value="ð" /></td>
	<td class="noright"><input type="button" class="button" onclick="typechar('s')" value="s" /></td>
	<td class="noleft"><input type="button" class="button" onclick="typechar('z')" value="z" /></td>
	<td class="noright"><input type="button" class="button" onclick="typechar('ʃ')" value="ʃ" /></td>
	<td class="noleft"><input type="button" class="button" onclick="typechar('ʒ')" value="ʒ" /></td>
	<td class="noright"><input type="button" class="button" onclick="typechar('ʂ')" value="ʂ" /></td>
	<td class="noleft"><input type="button" class="button" onclick="typechar('ʐ')" value="ʐ" /></td>
	<td class="noright"><input type="button" class="button" onclick="typechar('ɕ')" value="ɕ" /></td>
	<td class="noleft"><input type="button" class="button" onclick="typechar('ʑ')" value="ʑ" /></td>
	<td class="noright"><input type="button" class="button" onclick="typechar('ç')" value="ç" /></td>
	<td class="noleft"><input type="button" class="button" onclick="typechar('ʝ')" value="ʝ" /></td>
	<td class="noright"><input type="button" class="button" onclick="typechar('x')" value="x" /></td>
	<td class="noleft"><input type="button" class="button" onclick="typechar('ɣ')" value="ɣ" /></td>
	<td class="noright"><input type="button" class="button" onclick="typechar('χ')" value="χ" /></td>
	<td rowspan="2" class="noleft"><input type="button" class="button" onclick="typechar('ʁ')" value="ʁ" /></td>
	<td class="noright"><input type="button" class="button" onclick="typechar('ħ')" value="ħ" /></td>
	<td rowspan="2" class="noleft"><input type="button" class="button" onclick="typechar('ʕ')" value="ʕ" /></td>
	<td class="noright"><input type="button" class="button" onclick="typechar('h')" value="h" /></td>
	<td rowspan="2" class="noleft"><input type="button" class="button" onclick="typechar('ɦ')" value="ɦ" /></td>
      </tr>
      <tr>
	<th><input type="button" class="button" onclick="typechar('[approximant]')" value="Approximant" /></th>
	<td class="noright">&nbsp;</td>
	<td class="noright">&nbsp;</td>
	<td class="noleft"><input type="button" class="button" onclick="typechar('ʋ')" value="ʋ" /></td>
	<td class="noright">&nbsp;</td>
	<td class="noright">&nbsp;</td>
	<td class="noleft"><input type="button" class="button" onclick="typechar('ɹ')" value="ɹ" /></td>
	<td colspan="2">&nbsp;</td>
	<td class="noright">&nbsp;</td>
	<td class="noleft"><input type="button" class="button" onclick="typechar('ɻ')" value="ɻ" /></td>
	<td colspan="2">&nbsp;</td>
	<td class="noright">&nbsp;</td>
	<td class="noleft"><input type="button" class="button" onclick="typechar('j')" value="j" /></td>
	<td class="noright">&nbsp;</td>
	<td class="noleft"><input type="button" class="button" onclick="typechar('ɰ')" value="ɰ" /></td>
	<td class="noright">&nbsp;</td>
	<td class="noright">&nbsp;</td>
	<td class="noright">&nbsp;</td>
      </tr>
      <tr>
	<th><input type="button" class="button" onclick="typechar('[flap]')" value="Flap/tap" /></th>
	<td colspan="2">&nbsp;</td>
	<td class="noright">&nbsp;</td>
	<td class="noleft"><input type="button" class="button" onclick="typechar('ⱱ')" value="ⱱ" /></td>
	<td colspan="2">&nbsp;</td>
	<td class="noright">&nbsp;</td>
	<td class="noleft"><input type="button" class="button" onclick="typechar('ɾ')" value="ɾ" /></td>
	<td colspan="2">&nbsp;</td>
	<td class="noright">&nbsp;</td>
	<td class="noleft"><input type="button" class="button" onclick="typechar('ɽ')" value="ɽ" /></td>
	<td colspan="2" class="grey">&nbsp;</td>
	<td colspan="2" class="grey">&nbsp;</td>
	<td colspan="2" class="grey">&nbsp;</td>
	<td colspan="2">&nbsp;</td>
	<td colspan="2">&nbsp;</td>
	<td colspan="2" class="grey">&nbsp;</td>
      </tr>
    <tr>
      <th><input type="button" class="button" onclick="typechar('[trill]')" value="Trill" /></th>
	<td class="noright">&nbsp;</td>
	<td class="noleft"><input type="button" class="button" onclick="typechar('ʙ')" value="ʙ" /></td>
	<td colspan="2">&nbsp;</td>
	<td colspan="2">&nbsp;</td>
	<td class="noright">&nbsp;</td>
	<td class="noleft"><input type="button" class="button" onclick="typechar('r')" value="r" /></td>
	<td colspan="2">&nbsp;</td>
	<td class="noright">&nbsp;</td>
	<td class="noleft"><input type="button" class="button" onclick="typechar('ɽr')" value="ɽr" /></td>	
	<td colspan="2" class="grey">&nbsp;</td>
	<td colspan="2" class="grey">&nbsp;</td>
	<td colspan="2" class="grey">&nbsp;</td>
	<td class="noright">&nbsp;</td>
	<td class="noleft"><input type="button" class="button" onclick="typechar('ʀ')" value="ʀ" /></td>
	<td class="noright"><input type="button" class="button" onclick="typechar('ʜ')" value="ʜ" /></td>
	<td class="noleft"><input type="button" class="button" onclick="typechar('ʢ')" value="ʢ" /></td>
	<td colspan="2" class="grey">&nbsp;</td>
      </tr>
      <tr>
	<th><input type="button" class="button" onclick="typechar('[lateralapproximant]')" value="Lateral approximant" /></th>
	<td colspan="2" class="grey">&nbsp;</td>
	<td colspan="2" class="grey">&nbsp;</td>
	<td colspan="2">&nbsp;</td>
	<td class="noright">&nbsp;</td>
	<td class="noleft"><input type="button" class="button" onclick="typechar('l')" value="l" /></td>
	<td colspan="2">&nbsp;</td>
	<td class="noright">&nbsp;</td>
	<td class="noleft"><input type="button" class="button" onclick="typechar('ɭ')" value="ɭ" /></td>
	<td colspan="2">&nbsp;</td>
	<td class="noright">&nbsp;</td>
	<td class="noleft"><input type="button" class="button" onclick="typechar('ʎ')" value="ʎ" /></td>
	<td class="noright">&nbsp;</td>
	<td class="noleft"><input type="button" class="button" onclick="typechar('ʟ')" value="ʟ" /></td>
	<td colspan="2">&nbsp;</td>
	<td colspan="2" class="grey">&nbsp;</td>
	<td colspan="2" class="grey">&nbsp;</td>
      </tr>
      <tr>
	<th><input type="button" class="button" onclick="typechar('[lateralfricative]')" value="Lateral fricative" /></th>
	<td colspan="2" class="grey">&nbsp;</td>
	<td colspan="2" class="grey">&nbsp;</td>
	<td colspan="2">&nbsp;</td>
	<td class="noright"><input type="button" class="button" onclick="typechar('ɬ')" value="ɬ" /></td>
	<td class="noleft"><input type="button" class="button" onclick="typechar('ɮ')" value="ɮ" /></td>
	<td colspan="2">&nbsp;</td>
	<td colspan="2"><input type="button" class="button" onclick="typechar('ꞎ')" value="ꞎ" /></td>
	<td colspan="2">&nbsp;</td>
	<td colspan="2">&nbsp;</td>
	<td colspan="2">&nbsp;</td>
	<td colspan="2">&nbsp;</td>
	<td colspan="2" class="grey">&nbsp;</td>
	<td colspan="2" class="grey">&nbsp;</td>
      </tr>
      <tr>
	<th><input type="button" class="button" onclick="typechar('[lateralaffricate]')" value="Lateral affricate" /></th>
	<td colspan="2" class="grey">&nbsp;</td>
	<td colspan="2" class="grey">&nbsp;</td>
	<td colspan="2">&nbsp;</td>
	<td class="noright"><input type="button" class="button" onclick="typechar('tɬ')" value="tɬ" /></td>
	<td class="noleft"><input type="button" class="button" onclick="typechar('dɮ')" value="dɮ" /></td>
	<td colspan="2">&nbsp;</td>
	<td colspan="2"><input type="button" class="button" onclick="typechar('ʈꞎ')" value="ʈꞎ" /></td>
	<td colspan="2">&nbsp;</td>
	<td colspan="2">&nbsp;</td>
	<td colspan="2">&nbsp;</td>
	<td colspan="2">&nbsp;</td>
	<td colspan="2" class="grey">&nbsp;</td>
	<td colspan="2" class="grey">&nbsp;</td>
      </tr>
      <tr>
	<th><input type="button" class="button" onclick="typechar('[implosive]')" value="Implosive" /></th>
	<td class="noright">&nbsp;</td>
	<td class="noleft"><input type="button" class="button" onclick="typechar('ɓ')" value="ɓ" /></td>
	<td colspan="2">&nbsp;</td>
	<td colspan="2">&nbsp;</td>
	<td class="noright">&nbsp;</td>
	<td class="noleft"><input type="button" class="button" onclick="typechar('ɗ')" value="ɗ" /></td>
	<td colspan="2">&nbsp;</td>
	<td class="noright">&nbsp;</td>
	<td class="noleft"><input type="button" class="button" onclick="typechar('ᶑ')" value="ᶑ" /></td>
	<td colspan="2">&nbsp;</td>
	<td class="noright">&nbsp;</td>
	<td class="noleft"><input type="button" class="button" onclick="typechar('ʄ')" value="ʄ" /></td>
	<td class="noright">&nbsp;</td>
	<td class="noleft"><input type="button" class="button" onclick="typechar('ɠ')" value="ɠ" /></td>
	<td class="noright">&nbsp;</td>
	<td class="noleft"><input type="button" class="button" onclick="typechar('ʛ')" value="ʛ" /></td>
	<td colspan="2" class="grey">&nbsp;</td>
	<td colspan="2" class="grey">&nbsp;</td>
      </tr>
      <tr>
	<th><input type="button" class="button" onclick="typechar('[click]')" value="Click" /></th>
	<td colspan="2"><input type="button" class="button" onclick="typechar('ʘ')" value="ʘ" /></td>
	<td colspan="2">&nbsp;</td>
	<td colspan="2"><input type="button" class="button" onclick="typechar('ǀ')" value="ǀ" /></td>
	<td colspan="2"><input type="button" class="button" onclick="typechar('ǃ')" value="ǃ" /></td>
	<td colspan="2">&nbsp;</td>
	<td colspan="2"><input type="button" class="button" onclick="typechar('‼')" value="‼" /></td>
	<td colspan="2">&nbsp;</td>
	<td colspan="2"><input type="button" class="button" onclick="typechar('ǂ')" value="ǂ" /></td>
	<td colspan="2" class="grey">&nbsp;</td>
	<td colspan="2" class="grey">&nbsp;</td>
	<td colspan="2" class="grey">&nbsp;</td>
	<td colspan="2" class="grey">&nbsp;</td>
      </tr>
    </table>
    Other consonants:
    <input type="button" style="width:20px;" onclick="typechar('ɺ')" value="ɺ" />
    <input type="button" style="width:20px;" onclick="typechar('ǁ')" value="ǁ" />
    <input type="button" style="width:20px;" onclick="typechar('ʍ')" value="ʍ" />
    <input type="button" style="width:20px;" onclick="typechar('w')" value="w" />
    <input type="button" style="width:20px;" onclick="typechar('ɥ')" value="ɥ" />
    <input type="button" style="width:20px;" onclick="typechar('ɫ')" value="ɫ" />
    <input type="button" style="width:20px;" onclick="typechar('ɧ')" value="ɧ" />
    <input type="button" style="width:20px;" onclick="typechar('∅')" value="∅" />
    <input type="button" style="width:20px;" onclick="typechar('R')" value="R" />
    <br />
    Modifiers:
    <input type="checkbox" name="flags[]" value="ʷ" />ʷ
    <input type="checkbox" name="flags[]" value="ʲ" />ʲ
    <input type="checkbox" name="flags[]" value="ˤ" />ˤ
    <input type="checkbox" name="flags[]" value="ʰ" />ʰ
    <input type="checkbox" name="flags[]" value="ʼ" />ʼ
    <input type="checkbox" name="flags[]" value="[+voice]" />[+voice]
    <input type="checkbox" name="flags[]" value="[-voice]" />[-voice]
  </consonants>
  <vowels>
    <table>
      <tr>
	<th><input type="button" class="button" onclick="typechar('V')" value="Any vowel (V)" /></th>
	<th colspan="2"><input type="button" class="button" onclick="typechar('[front]')" value="Front" /></th>
	<th colspan="2"><input type="button" class="button" onclick="typechar('[central]')" value="Central" /></th>
	<th colspan="2"><input type="button" class="button" onclick="typechar('[back]')" value="Back" /></th>
      </tr>
      <tr>
	<th><input type="button" class="button" onclick="typechar('[close]')" value="Close" /></th>
	<td class="noright"><input type="button" class="button" onclick="typechar('i')" value="i" /></td>
	<td class="noleft"><input type="button" class="button" onclick="typechar('y')" value="y" /></td>
	<td class="noright"><input type="button" class="button" onclick="typechar('ɨ')" value="ɨ" /></td>
	<td class="noleft"><input type="button" class="button" onclick="typechar('ʉ')" value="ʉ" /></td>
	<td class="noright"><input type="button" class="button" onclick="typechar('ɯ')" value="ɯ" /></td>
	<td class="noleft"><input type="button" class="button" onclick="typechar('u')" value="u" /></td>
      </tr>
      <tr>
	<th><input type="button" class="button" onclick="typechar('[nearclose]')" value="Near-close" /></th>
	<td class="noright"><input type="button" class="button" onclick="typechar('ɪ')" value="ɪ" /></td>
	<td class="noleft"><input type="button" class="button" onclick="typechar('ʏ')" value="ʏ" /></td>
	<td class="noright"><input type="button" class="button" onclick="typechar('ᵻ')" value="ᵻ" /></td>
	<td class="noleft"><input type="button" class="button" onclick="typechar('ᵿ')" value="ᵿ" /></td>
	<td colspan="2"><input type="button" class="button" onclick="typechar('ʊ')" value="ʊ" /></td>
      </tr>
      <tr>
	<th><input type="button" class="button" onclick="typechar('[closemid]')" value="Close-mid" /></th>
	<td rowspan="2" class="noright"><input type="button" class="button" onclick="typechar('e')" value="e" /></td>
	<td rowspan="2" class="noleft"><input type="button" class="button" onclick="typechar('ø')" value="ø" /></td>
	<td class="noright"><input type="button" class="button" onclick="typechar('ɘ')" value="ɘ" /></td>
	<td class="noleft"><input type="button" class="button" onclick="typechar('ɵ')" value="ɵ" /></td>
	<td rowspan="2" class="noright"><input type="button" class="button" onclick="typechar('ɤ')" value="ɤ" /></td>
	<td rowspan="2" class="noleft"><input type="button" class="button" onclick="typechar('o')" value="o" /></td>
      </tr>
      <tr>
	<th><input type="button" class="button" onclick="typechar('[mid]')" value="Mid" /></th>
	<td colspan="2"><input type="button" class="button" onclick="typechar('ə')" value="ə" /></td>
      </tr>
      <tr>
	<th><input type="button" class="button" onclick="typechar('[openmid]')" value="Open-mid" /></th>
	<td class="noright"><input type="button" class="button" onclick="typechar('ɛ')" value="ɛ" /></td>
	<td class="noleft"><input type="button" class="button" onclick="typechar('œ')" value="œ" /></td>
	<td class="noright"><input type="button" class="button" onclick="typechar('ɜ')" value="ɜ" /></td>
	<td class="noleft"><input type="button" class="button" onclick="typechar('ɞ')" value="ɞ" /></td>
	<td class="noright"><input type="button" class="button" onclick="typechar('ʌ')" value="ʌ" /></td>
	<td class="noleft"><input type="button" class="button" onclick="typechar('ɔ')" value="ɔ" /></td>
      </tr>
      <tr>
	<th><input type="button" class="button" onclick="typechar('[nearopen]')" value="Near-open" /></th>
	<td colspan="2"><input type="button" class="button" onclick="typechar('æ')" value="æ" /></td>
	<td colspan="2"><input type="button" class="button" onclick="typechar('ɐ')" value="ɐ" /></td>
	<td colspan="2">&nbsp;</td>
      </tr>
      <tr>
	<th><input type="button" class="button" onclick="typechar('[open]')" value="Open" /></th>
	<td class="noright"><input type="button" class="button" onclick="typechar('a')" value="a" /></td>
	<td class="noleft"><input type="button" class="button" onclick="typechar('ɶ')" value="ɶ" /></td>
	<td colspan="2">&nbsp;</td>
	<td class="noright"><input type="button" class="button" onclick="typechar('ɑ')" value="ɑ" /></td>
	<td class="noleft"><input type="button" class="button" onclick="typechar('ɒ')" value="ɒ" /></td>
      </tr>
    </table>
    Modifiers:
    <input type="checkbox" name="flags[]" value="̃" />˜
    <input type="checkbox" name="flags[]" value="̤" /> ̤
    <input type="checkbox" name="flags[]" value="̰" /> ̰
    <input type="checkbox" name="flags[]" value="[+ATR]" />[+ATR]
    <input type="checkbox" name="flags[]" value="ˤ" />ˤ
    <input type="checkbox" name="flags[]" value="˞" /> ˞
    <br /><br />
    Source: <input type="text" onfocus="focus_input(this)" name="source" /><br />
    Result: <input type="text" onfocus="focus_input(this)" name="result" /><br />
    Environment: <input type="text" onfocus="focus_input(this)" name="env" /><br />
    <input type="submit" value="Search"/>
  </vowels>
</form>
<table>
<tr>
<!--	<th>ID</th>-->
	<th>Source</th>
	<th>Result</th>
	<th>Condition</th>
	<th>Attestation</th>
	<th>Notes</th>
</tr>
<?php
$voiceless = "ptʈckqɸfθsʃʂɕçxχħhɬ̥";
$voiced    = "bdɖɟɡɢβvðzʒʐʑʝɣʁʕɦɮ̬";
$unrounded = "iɪeɛaɨᵻɘɜɯɤʌɑ̜";
$rounded   = "yʏøœɶʉᵿɵɞuoɔɒ̹";

$modifiers = ["ʷ","ʲ","ˤ","ʰ","ʼ","ː","[+preaspirated]"];

$aliases = [
"[+labialized]" => "ʷ",
"[+palatalized]" => "ʲ",
"[+pharyngealized]" => "ˤ",
"[+aspirated]" => "ʰ",
"[+ejective]" => "ʼ",
"g" => "ɡ",
];

$categories = [
"[bilabial]" => "mpbpɸbβɸβʙɓʘ",
"[labiodental]" => "ɱpfbvfvʋⱱ",
"[dental]" => "θðtθdðǀ",
"[alveolar]" => "ntdtsdzszɹɾlɬɮtɬdɮɗǃɺ",
"[postalveolar]" => "ʃʒtʃdʒ",
"[retroflex]" => "ɳʈɖʈʂɖʐʂʐɻɽɽrɭꞎʈꞎᶑ‼",
"[alveolopalatal]" => "tɕdʑɕʑ",
"[palatal]" => "ɲcɟcçɟʝçʝjʎʄǂ",
"[velar]" => "ŋkɡkxgɣxɣɰʟɠ",
"[uvular]" => "ɴqɢqχɢʁχʁʀʛ",
"[pharyngeal]" => "ʡʡħʡʕħʕʜʢ",
"[glottal]" => "ʔʔhhɦ",
"[nasal]" => "mɱnɳɲŋɴ",
"[stop]" => "pbtdʈɖcɟkɡqɢʡʔ",
"[affricate]" => "pɸbβpfbvtθdðtsdztʃdʒʈʂɖʐtɕdʑcçɟʝkxɡɣqχɢʁʡħʡʕʔh",
"[fricative]" => "ɸβfvθðszʃʒʂʐɕʑçʝxɣχʁħʕhɦ",
"[approximant]" => "βʋðɹɻjɰʁʕɦwɥɫ",
"[flap]" => "ⱱɽɾ",
"[trill]" => "ʙrɽrʀʜʢ",
"[lateralapproximant]" => "lɭʎʟ",
"[lateralfricative]" => "ɬɮꞎ",
"[lateralaffricate]" => "tɬdɮʈꞎ",
"[implosive]" => "ɓɗᶑʄɠʛ",
"[click]" => "ʘǀǃ‼ǂǁ",
"[front]" => "iyɪʏeøɛœæaɶ",
"[central]" => "ɨʉᵻᵿɘɵəɜɞɐ",
"[back]" => "ɯuʊɤoʌɔɑɒ",
"[close]" => "iyɨʉɯu",
"[nearclose]" => "ɪʏᵻᵿʊ",
"[closemid]" => "eøɘɵɤo",
"[mid]" => "eøəɤo",
"[openmid]" => "ɛœɜɞʌɔ",
"[nearopen]" => "æɐ",
"[open]" => "aɶɑɒ",
];

if(!empty($_POST["source"])){
	//split it into strings; these will be tested as OR
	$source = explode("[, ]",$_POST["source"]);
}elseif(!empty($_GET["source"])){
	$source = explode(",",$_GET["source"]);
}
if(!empty($_POST["result"])){
	$result = explode("[, ]",$_POST["result"]);
}elseif(!empty($_GET["result"])){
	$result = explode(",",$_GET["result"]);
}
if(!empty($_POST["env"])){
	$env = explode("[, ]",$_POST["env"]);
}elseif(!empty($_GET["env"])){
	$env = explode(",",$_GET["env"]);
}


if(isset($_POST["flags"])){
	//add the flag to each item of $source
	foreach($_POST["flags"] as $flag){
		foreach($source as $k => $v){
			$source[$k] .= $flag;
		}
	}
}

function checkflag($flag,$list,$data,$token){
	foreach($data as $datatoken){
		if(($token == $flag) and strpos($list,$datatoken)) return false;
		if(($datatoken == $flag) and strpos($list,$token)) return false;
	}
	return true;
}

function tokenize($str){
	//Returns a list of tokens.
	$out = [];
	for($i=0;$i<strlen($str);$i++){
		$ch = mb_substr($str,$i,1,"utf-8");
		if($ch == "") break;
		if($ch == "["){
			$end = strpos($str,"]",$i);
			$ch = mb_substr($str,$i,$end-$i+1,"utf-8");
			$i = $end;
		}
		$out[] = $ch;
	}
	return $out;
}

// Flags that will determine sorting order. If a flag is set, priority is lower.
// If a flag has a higher value, priority is lower.
define("FLAG_MODIFIED",0x1); //has modifiers (tʰ)
define("FLAG_SURROUNDED",0x2); //has surrounding consonants (ts)
define("FLAG_CATEGORY",0x4); //has categories ([stop]) OR has specifics when the input is category

function matches_token($a,$b){
	global $categories;
	//are they equal?
	if($a == $b) return 0;

	//is one of them a category and the other isn't?
	if(isset($categories[$a]) and strpos($categories[$a],$b)) return FLAG_CATEGORY;
	if(isset($categories[$b]) and strpos($categories[$b],$a)) return FLAG_CATEGORY;

	return false;
}

function matches($data,$input){
	global $modifiers,$voiced,$voiceless,$rounded,$unrounded;

	$flags = 0;

	//data is already tokenized in matches_any, because it doesn't change
	$input = tokenize($input);

	//Preaspiration is a bitch.
	foreach($input as $i => $token){
		if($token == "ʰ") $input[$i] = "[+preaspirated]";
		if(!in_array($token,$modifiers)) break;
	}
	foreach($data as $i => $token){
		if($token == "ʰ") $data[$i] = "[+preaspirated]";
		if(!in_array($token,$modifiers)) break;
	}

	//Now we can check for modifiers. We have to do this first because they can be in any order.
	foreach($input as $token){
		if(!in_array($token,$modifiers)) continue;
		if(!in_array($token,$data)) return false;
	}

	//Now check the reverse—if data has a modifier that input doesn't have, we need to set the modifier flag.
	foreach($data as $token){
		if(in_array($token,$modifiers) and !in_array($token,$input)){
			$flags |= FLAG_MODIFIED;
			break;
		}
	}

	//Next make sure we don't have a [+/-] flag that conflicts with data.
	//This should probably loop through a list but for now.
	foreach($input as $token){
		if(!checkflag("[+voice]",$voiceless,$data,$token)) return false;
		if(!checkflag("[-voice]",$voiced,$data,$token)) return false;
		if(!checkflag("[+rounding]",$unrounded,$data,$token)) return false;
		if(!checkflag("[-rounding]",$rounded,$data,$token)) return false;
	}

	//Remove the modifiers to make searching easier
	foreach($modifiers as $mod){
		$input = array_values(array_diff($input,[$mod]));
		$data = array_values(array_diff($data,[$mod]));
	}

	//Check if we have surrounding characters (we don't need to check them all, just the ends)
	if((count($input)!==count($data)) or (matches_token($data[0],$input[0]) === false)){
		$flags |= FLAG_SURROUNDED;
	}

	//Reimplement a string search.
	foreach($data as $di => $datatoken){
		$found_match = true;
		for($index=0;$index<count($input);$index++){
			if($di+$index >= count($data)){
				$found_match = false;
				break;
			}
			if(($found_match = matches_token($data[$di+$index],$input[$index])) === false){
				$found_match = false;
				break;
			}
		}
		if($found_match !== false) return ($flags | $found_match);
	}
	return false;
}

function matches_any($data,$input){
	$data = tokenize($data);
	foreach($input as $i){
		if(($flags = matches($data,$i)) !== false){
			return $flags;
		}
	}
	return false;
}

$matches = [];
for($i=0;$i<8;$i++) $matches[] = [];

// open and read the database file
$db = new SQLite3("sc.db") or die("Can't open database file!");
$sc = $db->query("SELECT * FROM sc");
while($line = $sc->fetchArray(SQLITE3_NUM)){ // we need _NUM so that we can implode
	if( (!isset($source) or (($sourceflags = matches_any($line[0],$source)) !== false)) and
	    (!isset($result) or (($resultflags = matches_any($line[1],$result)) !== false)) and
	    (!isset($env) or (($envflags = matches_any($line[2],$env)) !== false)) ){
		if(!isset($sourceflags)) $sourceflags = 0;
		if(!isset($resultflags)) $resultflags = 0;
		if(!isset($envflags)) $envflags = 0;
		$matches[$sourceflags|$resultflags|$envflags][] = $line;
	}
}

for($i=0;$i<8;$i++){
	foreach($matches[$i] as $match){
		echo("<tr id=\"row".$match[5]."\"><td>".implode("</td><td>",$match)."</td><td class=\"edit\"><a href=\"#\">Edit</a></td></tr>\n");
	}
}
?>
</table>
</body>
</html>
