<?php

	$pattern="";
	$text="";
	$replaceText="";
	$replacedText="";
	$match="Not checked yet.";
	$extracted="";
if ($_SERVER["REQUEST_METHOD"]=="POST") {
	$pattern=$_POST["pattern"];
	$text=$_POST["text"];
	$replaceText=$_POST["replaceText"];
	$replacedText=preg_replace($pattern, $replaceText, $text);
	$replaceText = $_POST["replaceText"];
	$replacedText = preg_replace($pattern, $replaceText, $text);
	preg_match($pattern, $text, $matchs);
	$extracted = $matchs[1];
	if(preg_match($pattern, $text)) {
						$match="Match!";
					} else {
						$match="Does not match!";
					}
	
}
?>



		<dl>
			<dt>Pattern</dt>
			<dd><input type="text" name="pattern" value="<?= $pattern ?>"></dd>

			
			<dt>Text</dt>
			<dd><input type="text" name="text" value="<?= $text ?>"></dd>

			
			<dt>Replace Text</dt>
			<dd><input type="text" name="replaceText" value="<?= $replaceText ?>"></dd>

			<dt>Output Text</dt>
			<dd><?=	$match ?></dd>

			
			<dt>Replaced Text</dt>
			<dd> <code><?=	$replacedText ?></code></dd>
			<dd><?php echo $replacedText; ?></dd>

			<dt>Extracted Text</dt>
			<dd><?= $extracted ?></dd>
			<dt>&nbsp;</dt>
			<dd><input type="submit" value="Check"></dd>
		</dl>

		
	</form>
</body>
</html>