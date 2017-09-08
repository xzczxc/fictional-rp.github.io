/* 
 Правая кнопка мыши 
 */ 

 //при выделении 
 document.onselectstart=RMouseOff; 

 //отключение возможности тянуть объекты 
 document.ondragstart=RMouseOff; 

 //отключение всплывающего контекстного меню 
 document.oncontextmenu=RMouseOff; 

 /* 
 Левая кнопка мыши 
 */ 
 // при нажатии 
 document.onmousedown=RMouseOff; 
 // стоит отметить, что кнопки и ссылки будут работать, но текстовые поля нет 