var color_td;
document.write("<table border='1px'>");
var a = prompt("Enter the num");

for(var i = 1; i <= a; i++) {

	document.write("<tr style='height:30px;'>");

	for(var j = 1; j <= a; j++) {

		// if(j == 1 || i == 1) {
		// 	color_td = "#ccc";
		// }
		// else {
		// 	color_td = "#fff";
		// }
      document.write("<td style='width:30px;'>" + i*j + "</td>");
		// document.write("<td style='width:30px;background-color:" + color_td + "'>" + i*j + "</td>");
	}
	document.write("</tr>");
}

document.write("</table>");