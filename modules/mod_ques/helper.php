<?php
class modQuesHelper
{
    /**
     * Retrieves the hello message
     *
     * @param array $params An object containing the module parameters
     * @access public
     */    
    public function getQuesMenu()	
    {
?>
        <div class="spacer"></div>
        <div class="btn-toolbar btn-group-lg" role="toolbar" aria-label="Go to Section">
            <a href="<?php echo JUri::base(); ?>ask-question"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Ask An Astrologer</button></a>
            <a href="https://www.youtube.com/channel/UCe4znwEsQsyRiTJ-xetbS1A"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-film" aria-hidden="true"></span> Visit Our Youtube Channel</button></a>
        </div>
        <div class="spacer"></div>
        <div class="btn-toolbar btn-group-lg" role="toolbar" aria-label="Go to Section">
            <a href="<?php echo JUri::base(); ?>calculate-lagna"><button type="button" class="btn btn-primary"><img src="images/horo.png" height="20px" width="20px" /> Calculate Horoscope</button></a>
            <a href="<?php echo JUri::base(); ?>astro-register"><button type="button" class="btn btn-primary">Are you an Astrologer?</button></a>
        </div>
        
<?php
	}
}
?>

