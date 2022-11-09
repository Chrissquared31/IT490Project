void makeGUI() {
  
   cp5 = new ControlP5(this);


  cp5.addButton("SONG 1")
     .setValue(0)
     .setPosition(480,250)
     .setSize(150,50)
     
     ;
  
  cp5.addButton("DON'T KNOW")
     .setValue(1)
     .setPosition(680,250)
     .setSize(150,50)
     ;
     
  cp5.addButton("SONG 2")
     .setPosition(880,250)
     .setSize(150,50)
     .setValue(2)
     ;
     

   
   }
