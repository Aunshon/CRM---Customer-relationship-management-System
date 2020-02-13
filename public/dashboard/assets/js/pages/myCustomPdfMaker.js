function makePdf(){
  let printMe = document.getElementById('printMe');
  let win = window.open("","","width:700","height:900");
  win.document.write(printMe.outerHTML);
  win.document.close();
  win.focus();
  win.print();
  win.close();
}
