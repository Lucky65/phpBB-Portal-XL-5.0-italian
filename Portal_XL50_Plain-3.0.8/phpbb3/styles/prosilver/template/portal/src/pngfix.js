// Correctly handle PNG transparency in Win IE 5.5 or higher.
// <a href="http://homepage.ntlworld.com/bobosola." target="_blank">http://homepage.ntlworld.com/bobosola.</a> Updated 02-March-2004

function correctPNG()
{
	for(var i=0; i<document.images.length; i++)
	{
		var img = document.images[i]
		var imgName = img.src.toUpperCase()
		if (imgName.substring(imgName.length - 3, imgName.length) == "PNG")
		{
			var imgID = (img.id) ? "id='" + img.id + "' " : ""
			var imgClass = (img.className) ? "class='" + img.className + "' " : ""
			var imgTitle = (img.title) ? "title='" + img.title + "' " : "title='" + img.alt + "' "
			var imgStyle = "display:inline-block;" + img.style.cssText
			if (img.align == "left") imgStyle = "float:left;" + imgStyle
			if (img.align == "right") imgStyle = "float:right;" + imgStyle
			if (img.parentElement.href) imgStyle = "cursor:hand;" + imgStyle
			var strNewHTML = "<span " + imgID + imgClass + imgTitle
			+ " style=\"" + "width:" + img.width + "px; height:" + img.height + "px;" + imgStyle + ";"
			+ "filter:progid:DXImageTransform.Microsoft.AlphaImageLoader"
			+ "(src=\'" + img.src + "\', sizingMethod='scale');\"></span>"
			img.outerHTML = strNewHTML
			i = i-1
		}
	}
}

window.attachEvent("onload", correctPNG);

window.onload = function () {
  // only apply to IE
  if (!/*@cc_on!@*/0) return;

  // find every element to test
  var all = document.getElementsByTagName('*'), i = all.length;

  // fast reverse loop
  while (i--) {
    // if the scrollWidth (the real width) is greater than
    // the visible width, then apply style changes
    if (all[i].scrollWidth > all[i].offsetWidth) {
      all[i].style['paddingBottom'] = '20px';
      all[i].style['overflowY'] = 'hidden';
    }
  }
};
