<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php define("DOBRA_RADA", "Bez chleba, to się nie najesz")?>
<p><?php echo (strlen (DOBRA_RADA)); ?> </p>
<p><?php echo (str_word_count (DOBRA_RADA)); ?> </p>
<p><?php echo (strrev (DOBRA_RADA)); ?> </p>
<p><?php echo (strpos (DOBRA_RADA,"to")); ?> </p>
<p><?php echo (str_replace ("chleba","mięsa", DOBRA_RADA)); ?> </p>
<p><?php echo (strtolower (DOBRA_RADA)); ?> </p>
<p><?php echo (strtoupper (DOBRA_RADA)); ?> </p>
<p><?php echo (ucwords (DOBRA_RADA)); ?> </p>
<p><?php echo (trim (DOBRA_RADA)); ?> </p>
<p><?php echo (strstr (DOBRA_RADA,'nie' )); ?> </p>
<p><?php echo (substr (DOBRA_RADA,10, 5)); ?> </p>
<p><?php echo (str_pad (DOBRA_RADA ,41 ,"-_-", STR_PAD_BOTH)); ?> </p>
</html>
</head>