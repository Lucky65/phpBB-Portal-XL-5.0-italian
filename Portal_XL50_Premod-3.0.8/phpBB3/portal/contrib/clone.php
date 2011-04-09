<?php  
 
$src = 'subsilver2';  
$dst = 'dm_halloween';  
 
$ln = isset($_SERVER['HTTP_HOST']) ? '<br />' : "\n";  
 
echo 'Copying ', $src, ' to ', $dst, '...', $ln;  
 
$files = array();  
get_files($src, '/');  
 
function get_files($base, $dir)  
{  
   global $files;  
   $res = opendir($base . $dir);  
   while(($file = readdir($res)) !== false)  
   {  
       if($file !== '.' && $file !== '..')  
       {  
           if(is_dir($base . $dir . $file))  
           {  
               get_files($base, $dir . $file . '/');  
           }  
           else  
           {  
               $files[] = $dir . $file;  
           }  
       }  
   }  
   closedir($res);  
}  
 
for($i=0; $i<count($files); $i++)  
{  
   clone_file($src, $dst, $files[$i]);  
}  
 
function clone_file($src, $dst, $file)  
{  
   $new = $dst . str_replace($src, $dst, $file);  
   $data = @file_get_contents($src . $file);  
   $list = explode('.', strtolower($file));  
   $ext = $list[count($list) - 1];  
   if($ext === 'html' || $ext === 'cfg' || $ext === 'css' || $ext === 'php' || $ext === 'txt' || $ext === 'js' || $ext === 'htm')  
   {  
       $data = str_replace($src, $dst, $data);  
   }  
   $dirname = dirname($new);  
   if(strlen($dirname) && !@file_exists($dirname))  
   {  
       $list = explode('/', $dirname);  
       $str = '';  
       for($i=0; $i<count($list); $i++)  
       {  
           $str .= (strlen($str) ? '/' : '') . $list[$i];  
           if(!@file_exists($str))  
           {  
               if(!@mkdir($str, 0777))  
               {  
                   echo 'Cannot write cache file "' . $new . '".', $ln;  
                   return;  
               }  
           }  
       }  
   }  
   $f = @fopen($new, 'w');  
   if(!$f)  
   {  
       echo 'Cannot write cache file "' . $new . '".', $ln;  
       return;  
   }  
   fputs($f, $data);  
   fclose($f);  
   chmod($new, 0777);  
   touch($new, filemtime($src . $file));  
}  
 
echo 'done!';  
 
?> 