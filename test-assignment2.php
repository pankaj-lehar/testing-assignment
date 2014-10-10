<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
.table_style
{
	border-collapse:collapse;
	font-family:Arial, Helvetica, sans-serif;
	font-size:12px;
	color:#666;
	
}
.table_style td
{
	padding:8px 12px;
}
.row_odd_color
{
	background-color:#f6f6f6;
}
.row_even_color
{
	background-color:#ffffff;
}
</style>
</head>
<body>
<table border="1" class="table_style" align="center" bordercolor="#ccc" cellpadding="2" cellspacing="2">
<tr>
<td>Name</td><td>Color</td><td>Element</td><td>Likes</td>
</tr>
<?php $data[] = array(array('Name' => 'Trixie',
        'Color' => 'Green',
        'Element' => 'Earth',
        'Likes' => 'Flowers'),array('Name' => 'Tinkerbell',
	      'Element' => 'Air',
        'Likes' => 'Singning',
        'Color' => 'Blue'),array(
        'Element' => 'Water',
        'Likes' => 'Dancing',
        'Name' => 'Blum',
        'Color' => 'Pink'
        )); 
		$count =1;
	foreach($data as $key => $value)
	{
		foreach($value as $key1 => $value1)
		{ ?>
			<tr class="<?php if($count%2==0){ echo 'row_odd_color';} else { echo 'row_even_color';}  ?>"><td><?php echo $value1['Name'];  ?></td><td><?php echo $value1['Color'];  ?></td>
            <td><?php echo $value1['Element'];  ?></td>
            <td><?php echo $value1['Likes'];  ?></td></tr>
		<?php $count++; }
	}
  ?>
        
        
</table>
</body>
</html>