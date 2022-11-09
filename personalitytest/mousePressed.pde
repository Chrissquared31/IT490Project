void mouseClicked () {
 background(backgroundImage);

Table table = loadTable("table.csv", "header");
    
    TableRow rowRandoml = table.getRow((int)random(1, 1000)); 
    String namel = rowRandoml.getString("artist"); 
    String songl = rowRandoml.getString("title"); 
    float energyl = rowRandoml.getFloat("energy");
    float valencel = rowRandoml.getFloat("valence");
    float danceabilityl = rowRandoml.getFloat("danceability");
    textSize(20); 
    fill(255);
    text( namel, 480,340); 
    text( songl, 480,360); 
    println ( namel+": "+ songl+": "+energyl+": "+valencel+": "+danceabilityl);
 
    TableRow rowRandomr = table.getRow((int)random(1, 1000)); 
    String namer = rowRandomr.getString("artist"); 
    String songr = rowRandomr.getString("title"); 
    float energyr = rowRandomr.getFloat("energy");
    float valencer = rowRandomr.getFloat("valence");
    float danceabilityr = rowRandomr.getFloat("danceability");
    textSize(20); 
    fill(255);
    text( namer, 880,340); 
    text( songr, 880,360); 
    println ( namer+": "+songr+": "+energyr+": "+valencer+": "+danceabilityr);
    
 
  switch(round1++) {
    
  case 0: case 1: case 2: case 3: case 4: case 5:
  text( "BASED OFF ENERGY: Not enough data collected yet :(", 480,550); 
  break;
  
  case 6: case 7: case 8: case 9: case 10: case 11:
  if (energyl++ < 2.0)
  text("BASED OFF ENERGY: You are curious and energetic", 480,550); 
  else 
  text("BASED OFF ENERGY: You are consistent and sensitive", 480,550);
  
  if (valencel++ < 2.0)
  text("BASED OFF VALENCE: You are positive", 480,600); 
  else 
  text("BASED OFF VALENCE: You are a realist", 480,600);
  
  if (danceabilityl++ < 2.0)
  text("BASED OFF DANCEABILITY: You are out-going", 480,650); 
  else 
  text("BASED OFF DANCEABILITY: You are a reserved", 480,650);
  
  break;
  
  case 12: case 13: case 14: case 15: case 16: case 17:
  if (energyl++ < 4.0)
  text("BASED OFF ENERGY: You are curious and energetic", 480,550); 
  else 
  text("BASED OFF ENERGY: You are consistent and sensitive", 480,550);
  
  if (valencel++ < 4.0)
  text("BASED OFF VALENCE: You are positive", 480,600); 
  else 
  text("BASED OFF VALENCE: You are a realist", 480,600);
  
  if (danceabilityl++ < 4.0)
  text("BASED OFF DANCEABILITY: You are out-going", 480,650); 
  else 
  text("BASED OFF DANCEABILITY: You are a reserved", 480,650);
}

switch(round2++) {
    
  case 18: case 19: case 20: case 21: case 22: case 23:
  if (energyl++ < 6.0)
  text("BASED OFF ENERGY: You are curious and energetic", 480,550); 
  else 
  text("BASED OFF ENERGY: You are consistent and sensitive", 480,550);
  
  if (valencel++ < 6.0)
  text("BASED OFF VALENCE: You are positive", 480,600); 
  else 
  text("BASED OFF VALENCE: You are a realist", 480,600);
  
  if (danceabilityl++ < 6.0)
  text("BASED OFF DANCEABILITY: You are out-going", 480,650); 
  else 
  text("BASED OFF DANCEABILITY: You are a reserved", 480,650);
  
  case 24: case 25: case 26: case 27: case 28: case 29:
  if (energyl++ < 8.0)
  text("BASED OFF ENERGY: You are curious and energetic", 480,550); 
  else 
  text("BASED OFF ENERGY: You are consistent and sensitive", 480,550);
  
  if (valencel++ < 8.0)
  text("BASED OFF VALENCE: You are positive", 480,600); 
  else 
  text("BASED OFF VALENCE: You are a realist", 480,600);
  
  if (danceabilityl++ < 8.0)
  text("BASED OFF DANCEABILITY: You are out-going", 480,650); 
  else 
  text("BASED OFF DANCEABILITY: You are a reserved", 480,650);
  
  case 30: case 31: case 32: case 33: case 34: case 35:
  if (energyl++ < 10.0)
  text("BASED OFF ENERGY: You are curious and energetic", 480,550); 
  else 
  text("BASED OFF ENERGY: You are consistent and sensitive", 480,550);
  
  if (valencel++ < 10.0)
  text("BASED OFF VALENCE: You are positive", 480,600); 
  else 
  text("BASED OFF VALENCE: You are a realist", 480,600);
  
  if (danceabilityl++ < 10.0)
  text("BASED OFF DANCEABILITY: You are out-going", 480,650); 
  else 
  text("BASED OFF DANCEABILITY: You are a reserved", 480,650);
}


switch(round3++) {
    
  case 36: case 37: case 38: case 39: case 40: case 41:
  if (energyl++ < 12.0)
  text("BASED OFF ENERGY: You are curious and energetic", 480,550); 
  else 
  text("BASED OFF ENERGY: You are consistent and sensitive", 480,550);
  
  if (valencel++ < 12.0)
  text("BASED OFF VALENCE: You are positive", 480,600); 
  else 
  text("BASED OFF VALENCE: You are a realist", 480,600);
  
  if (danceabilityl++ < 12.0)
  text("BASED OFF DANCEABILITY: You are out-going", 480,650); 
  else 
  text("BASED OFF DANCEABILITY: You are a reserved", 480,650);
  
  case 42: case 43: case 44: case 45: case 46: case 47:
  if (energyl++ < 14.0)
  text("BASED OFF ENERGY: You are curious and energetic", 480,550); 
  else 
  text("BASED OFF ENERGY: You are consistent and sensitive", 480,550);
  
  if (valencel++ < 14.0)
  text("BASED OFF VALENCE: You are positive", 480,600); 
  else 
  text("BASED OFF VALENCE: You are a realist", 480,600);
  
  if (danceabilityl++ < 14.0)
  text("BASED OFF DANCEABILITY: You are out-going", 480,650); 
  else 
  text("BASED OFF DANCEABILITY: You are a reserved", 480,650);
  
  case 48: case 49: case 50: case 51: case 52: case 53:
  if (energyl++ < 16.0)
  text("BASED OFF ENERGY: You are curious and energetic", 480,550); 
  else 
  text("BASED OFF ENERGY: You are consistent and sensitive", 480,550);
  
  if (valencel++ < 16.0)
  text("BASED OFF VALENCE: You are positive", 480,600); 
  else 
  text("BASED OFF VALENCE: You are a realist", 480,600);
  
  if (danceabilityl++ < 16.0)
  text("BASED OFF DANCEABILITY: You are out-going", 480,650); 
  else 
  text("BASED OFF DANCEABILITY: You are a reserved", 480,650);
}
}
 
 

 
 
 
 
 
