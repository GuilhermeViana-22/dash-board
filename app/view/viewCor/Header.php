<?php
require_once("../src/Trait/TraitUrlParse.php");

use Src\Trait\TraitUrlParser;

?>

<header>
    <div class="header_content">
        <input type="text" class="token_header" data-cor="<?php echo $this->parseUrl()[3]; ?>" hidden data-token="<?php echo $_SESSION['token_hash'] ?>">
    </div>
</header>