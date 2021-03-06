<?php
/*
 * Copyright 2005-2013 the original author or authors.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

require_once("inc_menu.php");
$page['title'] = getlocal("updates.title");
$page['menuid'] = "updates";

function tpl_header() { global $page, $webimroot;
?>	
<script type="text/javascript" language="javascript" src="<?php echo $webimroot ?>/js/libs/jquery.min.js"></script>
<script type="text/javascript" language="javascript" src="http://mibew.org/latestWebim.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo $webimroot ?>/js/compiled/update.js"></script>
<?php
}

function tpl_content() { global $page, $webimroot;
?>

<?php echo getlocal("updates.intro") ?>
<br />
<br />
<div>
	<div class="mform"><div class="formtop"><div class="formtopi"></div></div><div class="forminner">
	
		<?php echo getlocal("updates.news")?><br/>
		<div id="news">
		</div>
		
		<?php echo getlocal("updates.current")?><br/>
			<div id="cver"><?php echo $page['version'] ?></div>
			
		<br/>

		<?php echo getlocal("updates.latest")?>
			<div id="lver"></div>
		
		<br/>
			
		<?php echo getlocal("updates.installed_locales")?><br/>
			<?php foreach( $page['localizations'] as $loc ) { ?>
				<?php echo $loc ?>
			<?php } ?>
		
		<br/><br/>	
		
		<?php echo getlocal("updates.env")?><br/>
			PHP <?php echo $page['phpVersion'] ?>

	</div><div class="formbottom"><div class="formbottomi"></div></div></div>
</div>		

<?php 
} /* content */

require_once('inc_main.php');
?>