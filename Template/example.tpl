{config_load file='config/foo.conf'}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{#title#}</title>
</head>

<body>
    <h1>{$name}</h1>

    <p> showing array data key by key </p>
    {$user_list[0]['name']} => {$user_list[0]['department']} </br>
    {$user_list[1]['name']} => {$user_list[1]['department']} </br>
   
   
    <p> Showing the data of an array in tabular form </p>
    <table border="{#tableBorderSize#}">
        <tr>
            <th>Name</th>
            <th>Department</th>
        </tr>
        <tr>
            <td>{$user_list[0]['name']}</td>
            <td>{$user_list[0]['department']}</td>
        </tr>
        <tr>
            <td>{$user_list[1]['name']}</td>
            <td>{$user_list[1]['department']}</td>
        </tr>
        <tr>
            <td>{$user_list[2]['name']}</td>
            <td>{$user_list[2]['department']}</td>
        </tr>
        <tr>
            <td>{$user_list[3]['name']}</td>
            <td>{$user_list[3]['department']}</td>
        </tr>
    </table>


    <p> Creating the table using loop </p>
    <table border="{#tableBorderSize#}">
        <tr>
            <th>Name</th>
            <th>Department</th>
        </tr>
        {foreach $user_list as $user}
            <tr>
                <td>{$user['name']}</td>
                <td>{$user['department']}</td>
            </tr>
        {/foreach}
    </table>

   

    {assign var = "name" value = 2}
    {if $name == 1}
        Smarty is a good language.
    {else if $name == 2}
        smarty is an average language.
    {else}
        smarty is a bad language.
    {/if}

{* 
    </br>
    </br>
    {foreach $user_list as $contact}
        {foreach $contact as $key => $value}
            {$key}: {$value}
        {/foreach}
    {/foreach} *}


    {* {hello } *}

    {$hello}


    <p>Perform on string : </p>
    <p>In Lower Case : </p>
    {$string1|lower}<br>
    {$string2|lower}
    <p>Replacing : </p>
    {$string1|replace:'ucertify' : 'uCertify'} <br>
    {$string2|replace:'ucertify' : 'uCertify'}
    <p>Wraps : </p>
    {$string1|wordwrap:30} <br>
    {$string2|wordwrap:30}
    <p>Merge</p>
    {assign var=merge value="{$string1}{$string2}"}
    {$merge}
<br>
<br>
    <p>Select option</p>
    {html_options name=foo options=$myOption selected=$myOption}
<br>

<p>2. Example of Escape</p>
{$str|escape}
<br>

<p>Example of Concatenation</p>
{$str2|cat:" Concatenation"}
<br>



  <p>Number operations on : {$num} </p>

   rem:<br>
   {math equation="$num%2"}<br>

   {if {math equation="$num%2"} eq '0'}
   num is even<br>

   {else}
   num is odd <br>

   {/if}
   table:<br>
   {for $new=1 to 10}
   {math equation="$num*$new"}<br>
    {/for}

<p>mail attributes</p>
{mailto address="abhay.gupta@ucertify.com"}

<p>Date format</p>
{$smarty.now|date_format} 
<br>
{$smarty.now|date_format:"%D"}
<br>


</body>

</html>