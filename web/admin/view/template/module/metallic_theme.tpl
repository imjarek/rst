<?php echo $header; ?>
<!-- ckeditor --->
<script type="text/javascript" src="view/javascript/ckeditor/ckeditor.js"></script> 
<div id="content">
  <div class="breadcrumb">
    <?php foreach ($breadcrumbs as $breadcrumb) { ?>
    <?php echo $breadcrumb['separator']; ?><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a>
    <?php } ?>
  </div>
  <?php if ($error_warning) { ?>
  <div class="warning"><?php echo $error_warning; ?></div>
  <?php } ?>
  <div class="box">
    <div class="heading">
      <h1><img src="view/image/module.png" alt="" /> <?php echo $heading_title; ?></h1>
      <div class="buttons"><a onclick="$('#form').submit();" class="button"><?php echo $button_save; ?></a><a onclick="location = '<?php echo $cancel; ?>';" class="button"><?php echo $button_cancel; ?></a></div>
    </div>
    <div class="content">
	 <div id="tabs" class="htabs">
		<a href="#tab-about"><?php echo $txt_about_block; ?></a>
		<a href="#tab-contacts-block"><?php echo $txt_contacts_block; ?></a>
		<a href="#tab-soc-btns"><?php echo $txt_social_links; ?></a>
	</div>
	 
      <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" id="form">
	  <div id="tab-about">	
			  
			  <div id="tabs_about" class="htabs">
				  <?php foreach ($languages as $language) { ?>
					<a href="#tab-lang-about-<?php echo $language['language_id']; ?>"><img src="view/image/flags/<?php echo $language['image']; ?>" title="<?php echo $language['name']; ?>" /> <?php echo $language['name']?></a>
				  <?php } ?>
			  </div>
			  
				<?php foreach ($languages as $language) { ?>
				
				<div id="tab-lang-about-<?php echo $language['language_id']; ?>">
					<table class="form">
					<tr>
						<td>
							<?php echo $txt_title; ?>
						<td>
							<input type="text" value="<?php echo (isset($metallic_theme['about_title'][$language['language_id']]) ? $metallic_theme['about_title'][$language['language_id']] : ''); ?>" name="metallic_theme[about_title][<?php echo $language['language_id']; ?>]" />
					<tr>
						<td colspan=2>
						<textarea type="text" id="metallic_theme_about_text<?php echo $language['language_id']; ?>" name="metallic_theme[about_text][<?php echo $language['language_id']; ?>]" style="width: 440px; height: 100px; font: 11px Arial;"/><?php echo (isset($metallic_theme['about_text'][$language['language_id']]) ? $metallic_theme['about_text'][$language['language_id']] : ''); ?></textarea>
					</table>
				</div>
				<script>
					CKEDITOR.replace('metallic_theme_about_text<?php echo $language['language_id']; ?>', {
						filebrowserBrowseUrl: 'index.php?route=common/filemanager&token=<?php echo $token; ?>',
						filebrowserImageBrowseUrl: 'index.php?route=common/filemanager&token=<?php echo $token; ?>',
						filebrowserFlashBrowseUrl: 'index.php?route=common/filemanager&token=<?php echo $token; ?>',
						filebrowserUploadUrl: 'index.php?route=common/filemanager&token=<?php echo $token; ?>',
						filebrowserImageUploadUrl: 'index.php?route=common/filemanager&token=<?php echo $token; ?>',
						filebrowserFlashUploadUrl: 'index.php?route=common/filemanager&token=<?php echo $token; ?>'
					});
				</script>
			  <?php } ?>

		</div><!-- / tab-about -->
		<div id="tab-contacts-block">
			<table class="form">
			<tr>
              <td><?php echo $txt_title; ?></td>
              <td>
			  <?php foreach ($languages as $language) { ?>
				<input type="text" value="<?php echo (isset($metallic_theme['contacts_title'][$language['language_id']]) ? $metallic_theme['contacts_title'][$language['language_id']] : ''); ?>" name="metallic_theme[contacts_title][<?php echo $language['language_id']; ?>]" /> <img src="view/image/flags/<?php echo $language['image']; ?>" title="<?php echo $language['name']; ?>" />
				<div></div>
			  <?php } ?>
			  </td>
            </tr>
			<tr>
              <td><?php echo $txt_address; ?></td>
              <td>
				<textarea type="text" id="metallic_theme_contacts_address" name="metallic_theme[contacts_address]" /><?php echo (isset($metallic_theme['contacts_address']) ? $metallic_theme['contacts_address'] : ''); ?></textarea>
			  </td>
			</tr>
			<tr>
			  <td>Skype</td>
              <td>
				<input type="text" value="<?php echo $metallic_theme['contacts_skype']; ?>" name="metallic_theme[contacts_skype]; ?>]" />
			  </td>
            </tr>
			<tr>
			  <td><?php echo $txt_contacts_copyright; ?></td>
              <td>
				<textarea type="text" id="metallic_theme_contacts_copyright" name="metallic_theme[contacts_copyright]" /><?php echo (isset($metallic_theme['contacts_copyright']) ? $metallic_theme['contacts_copyright'] : ''); ?></textarea>
			  </td>
            </tr>
        </table>
		</div><!-- / tab-contacts_block -->
		
		<div id="tab-soc-btns">
		<table class="form" id="s_btns">
		<tr>
              <td><?php echo $txt_title; ?></td>
              <td colspan="5">
			  <?php foreach ($languages as $language) { ?>
				<input type="text" value="<?php echo (isset($metallic_theme['social_buttons_title'][$language['language_id']]) ? $metallic_theme['social_buttons_title'][$language['language_id']] : ''); ?>" name="metallic_theme[social_buttons_title][<?php echo $language['language_id']; ?>]" /> <img src="view/image/flags/<?php echo $language['image']; ?>" title="<?php echo $language['name']; ?>" />
				<div></div>
			  <?php } ?>
			  </td>
		</tr>
		<tr>
			<td align="left">
				<a href="javascript:show_s_btn_list()" class="button"><?php echo $txt_add_soc_btns; ?></a>
			</td>
			<td id="s_btn_list" colspan="5">
			<!-- Stylesheet for the social icons: https://github.com/Grawl/Grands  -->
			<link rel="stylesheet" type="text/css" href="../catalog/view/theme/metalic/grands_icon_font/style.css" />
				<div id="glyphs">
						<span class="box1">
						<span aria-hidden="true" class="icon-YouTube"></span>
						</span>
						<span class="box1">
						<span aria-hidden="true" class="icon-Yandex"></span>
						</span>
						<span class="box1">
						<span aria-hidden="true" class="icon-Vkontakte"></span>
						</span>
						<span class="box1">
						<span aria-hidden="true" class="icon-VK"></span>
						</span>
						<span class="box1">
						<span aria-hidden="true" class="icon-vimeo"></span>
						</span>
						<span class="box1">
						<span aria-hidden="true" class="icon-twitter"></span>
						</span>
						<span class="box1">
						<span aria-hidden="true" class="icon-tumblr"></span>
						</span>
						<span class="box1">
						<span aria-hidden="true" class="icon-Steam"></span>
						</span>
						<span class="box1">
						<span aria-hidden="true" class="icon-StackOverflow"></span>
						</span>
						<span class="box1">
						<span aria-hidden="true" class="icon-SoundCloud"></span>
						</span>
						<span class="box1">
						<span aria-hidden="true" class="icon-Skype"></span>
						</span>
						<span class="box1">
						<span aria-hidden="true" class="icon-Share"></span>
						</span>
						<span class="box1">
						<span aria-hidden="true" class="icon-RSS"></span>
						</span>
						<span class="box1">
						<span aria-hidden="true" class="icon-Readability"></span>
						</span>
						<span class="box1">
						<span aria-hidden="true" class="icon-Read-it-Later"></span>
						</span>
						<span class="box1">
						<span aria-hidden="true" class="icon-Pocket"></span>
						</span>
						<span class="box1">
						<span aria-hidden="true" class="icon-Pinterest"></span>
						</span>
						<span class="box1">
						<span aria-hidden="true" class="icon-Picasa"></span>
						</span>
						<span class="box1">
						<span aria-hidden="true" class="icon-OpenID"></span>
						</span>
						<span class="box1">
						<span aria-hidden="true" class="icon-MySpace"></span>
						</span>
						<span class="box1">
						<span aria-hidden="true" class="icon-MoiKrug"></span>
						</span>
						<span class="box1">
						<span aria-hidden="true" class="icon-Linked-in"></span>
						</span>
						<span class="box1">
						<span aria-hidden="true" class="icon-LifeJournal"></span>
						</span>
						<span class="box1">
						<span aria-hidden="true" class="icon-lastfm"></span>
						</span>
						<span class="box1">
						<span aria-hidden="true" class="icon-Jabber"></span>
						</span>
						<span class="box1">
						<span aria-hidden="true" class="icon-Instapaper"></span>
						</span>
						<span class="box1">
						<span aria-hidden="true" class="icon-HabraHabr"></span>
						</span>
						<span class="box1">
						<span aria-hidden="true" class="icon-google"></span>
						</span>
						<span class="box1">
						<span aria-hidden="true" class="icon-GitHub-octoface"></span>
						</span>
						<span class="box1">
						<span aria-hidden="true" class="icon-GitHub-circle"></span>
						</span>
						<span class="box1">
						<span aria-hidden="true" class="icon-FourSquare"></span>
						</span>
						<span class="box1">
						<span aria-hidden="true" class="icon-flickr"></span>
						</span>
						<span class="box1">
						<span aria-hidden="true" class="icon-Flattr"></span>
						</span>
						<span class="box1">
						<span aria-hidden="true" class="icon-facebook"></span>
						</span>
						<span class="box1">
						<span aria-hidden="true" class="icon-Evernote"></span>
						</span>
						<span class="box1">
						<span aria-hidden="true" class="icon-Email"></span>
						</span>
						<span class="box1">
						<span aria-hidden="true" class="icon-DropBox"></span>
						</span>
						<span class="box1">
						<span aria-hidden="true" class="icon-Blogspot"></span>
						</span>
						<span class="box1">
						<span aria-hidden="true" class="icon-BitBucket"></span>
						</span>
						<span class="box1">
						<span aria-hidden="true" class="icon-YouTube-play"></span>
						</span>
				</div>
				<style>
				#glyphs {
					display: none;
				}
				#glyphs, #glyphs a {
					font-size: 50px;
				}
				#glyphs, #glyphs span{
					border: 1px solid #FFF;
				}
				#glyphs span:not(.box1) {
					cursor: pointer;
				}
				th.headet-btns-tbl {
					font: 18px/30px Tahoma; 
					padding: 10px 0 0; 
					margin: 0;
					text-align: left;
				}
				</style>
			</td>
		</tr>
		<tr>
			<th></th>
			<th class="headet-btns-tbl"><?php echo $txt_css_class; ?></th>
			<th class="headet-btns-tbl"><?php echo $txt_icon_title; ?></th>
			<th class="headet-btns-tbl"><?php echo $txt_icon_href; ?> (href)</th>
			<th class="headet-btns-tbl"><?php echo $txt_order; ?></th>
			<th></th>
		</tr>

		<?php 
		$i = 0;
		
		if (isset($metallic_theme['icons']) and !empty($metallic_theme['icons'])) {
			
			foreach($metallic_theme['icons'] as $key => $icon) {
				echo 	"<tr>";
				echo		'<td><span style="font-size: 50px;" class="'. $icon['class'] .'"></span></td>';
				echo		'<td><input type="text" name="metallic_theme[icon]['.$i.'][class]" value="'. $icon['class'] .'" /></td>';
				echo		'<td><input type="text" name="metallic_theme[icon]['.$i.'][title]" value="'. $icon['title'] .'" /></td>';
				echo 		'<td><input type="text" name="metallic_theme[icon]['.$i.'][href]" value="'. $icon['href'] .'" /></td>';
				echo		'<td><input type="text" name="metallic_theme[icon]['.$i.'][order]" value="'. $icon['order'] .'" /></td>';
				echo		'<td align="right"><a href="javascript:" class="button remove">'. $button_remove .'</a></td>';
				echo	"</tr>";
				$i++;
			} 
		}
		?>
		</table>
		</div><!-- / tab-soc-btns -->
      </form>
    </div>
  </div>
</div>
<script type="text/javascript"><!--
			var module = <?php echo $i; ?>;
			$(function() {
			
				$('#tabs a').tabs(); 
				$('#tabs_about a').tabs(); 
				
				$('#glyphs span:not(.box1)').click(function() {
					module++;
					var icon_class = $(this).attr('class');
					$('#s_btns').append(
						"<tr>"+
							'<td><span style="font-size: 50px;" class="'+icon_class+'"></span></td>'+
							'<td><input type="text" name="metallic_theme[icon]['+module+'][class]" value="'+ icon_class +'" /></td>'+
							'<td><input type="text" name="metallic_theme[icon]['+module+'][title]" value="" /></td>'+
							'<td><input type="text" name="metallic_theme[icon]['+module+'][href]" value="http://" /></td>'+
							'<td><input type="text" name="metallic_theme[icon]['+module+'][order]" value="10" /></td>'+
							'<td align="right"><a href="javascript:" class="button remove"><?php echo $button_remove; ?></a></td>'+
						"</tr>"
					);
					$('#glyphs').hide();
				});
				
				$('.button.remove').live('click', function() {
					$(this).parent().parent().remove();
				});
				
			});			
				
				function show_s_btn_list() {
					$('#glyphs').show();
				}
				
				CKEDITOR.replace('metallic_theme_contacts_copyright', {
					filebrowserBrowseUrl: 'index.php?route=common/filemanager&token=<?php echo $token; ?>',
					filebrowserImageBrowseUrl: 'index.php?route=common/filemanager&token=<?php echo $token; ?>',
					filebrowserFlashBrowseUrl: 'index.php?route=common/filemanager&token=<?php echo $token; ?>',
					filebrowserUploadUrl: 'index.php?route=common/filemanager&token=<?php echo $token; ?>',
					filebrowserImageUploadUrl: 'index.php?route=common/filemanager&token=<?php echo $token; ?>',
					filebrowserFlashUploadUrl: 'index.php?route=common/filemanager&token=<?php echo $token; ?>'
				});
				CKEDITOR.replace('metallic_theme_contacts_address', {
					filebrowserBrowseUrl: 'index.php?route=common/filemanager&token=<?php echo $token; ?>',
					filebrowserImageBrowseUrl: 'index.php?route=common/filemanager&token=<?php echo $token; ?>',
					filebrowserFlashBrowseUrl: 'index.php?route=common/filemanager&token=<?php echo $token; ?>',
					filebrowserUploadUrl: 'index.php?route=common/filemanager&token=<?php echo $token; ?>',
					filebrowserImageUploadUrl: 'index.php?route=common/filemanager&token=<?php echo $token; ?>',
					filebrowserFlashUploadUrl: 'index.php?route=common/filemanager&token=<?php echo $token; ?>'
				});
				
				
//--></script> 
<?php echo $footer; ?>