
<?php if (($online_user = $chat->online_user) !== false) : ?>

<?php include(erLhcoreClassDesign::designtpl('lhchat/chat_tabs/online_user_info_tab_pre.tpl.php'));?>	
<?php if ($information_tab_online_user_info_tab_enabled == true) : ?>
<li role="presentation"><a href="#online-user-info-tab-<?php echo $chat->id?>" aria-controls="online-user-info-tab-<?php echo $chat->id?>" role="tab" data-toggle="tab" title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/adminchat','User browsing information')?>"><i class="icon-network"></i></a></li>
<?php endif;?>

<?php include(erLhcoreClassDesign::designtpl('lhchat/chat_tabs/online_user_info_tab_chats_pre.tpl.php'));?>	
<?php if ($information_tab_online_user_info_tab_chats_enabled == true) : ?>
<li role="presentation"><a href="#online-user-info-chats-tab-<?php echo $chat->id?>" aria-controls="online-user-info-chats-tab-<?php echo $chat->id?>" role="tab" data-toggle="tab" title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/adminchat','Chats')?>"><i class="icon-chat"></i></a></li>
<?php endif;?>

<?php endif;?>