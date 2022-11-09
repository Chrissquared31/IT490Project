void loadData(){
  table = loadTable("table.csv", "header");
  
  
  for(int i = 0; i < table.getRowCount(); i++) {
  
    TableRow row = table.getRow(i);
    
    float energy = row.getFloat("energy");
    float valence = row.getFloat("valence");
    float danceability = row.getFloat("danceability");
    String artist = row.getString("artist");
    String title = row.getString("title");
    
    println ("We are measuring 'Energy' from 0.0 - 1.0 eg. " + energy);
    println ("We are measuring 'Valence' ie. positivity from 0.0 - 1.0 eg. " + valence);
    println ("We are measuring 'Danceability' from 0.0 - 1.0 eg. = " + danceability);
    println ("For each song eg. '" + artist + "'");
    println ("By different artists eg. " + title);
  }}
