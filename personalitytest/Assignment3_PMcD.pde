import interfascia.*;
import java.util.List;
import controlP5.*;


PImage backgroundImage;
Table table;
float energy;
float valence;
float danceability;
String artist;
String title;
int i;
int round1, round2, round3;


ControlP5 cp5;
GUIController controller;


void setup() {
 size(1140, 869);
 backgroundImage = loadImage("interface.jpg"); 
 background(backgroundImage);
 makeGUI();
 fill(#0E9696);
 PFont pfont = createFont("Times", 1,false); 
 ControlFont font = new ControlFont(pfont,15);
 cp5.setFont(font);
 
 
 
 Table table = loadTable("table.csv", "header");
    TableRow rowRandom = table.getRow((int)random(1, 1000)); 
    String name = rowRandom.getString("artist"); 
    String song = rowRandom.getString("title"); 
    float energy = rowRandom.getFloat("energy");
    float valence = rowRandom.getFloat("valence");
    float danceability = rowRandom.getFloat("danceability");
    textSize(20); 
    fill(255);
    text( name, 480,340); 
    text( song, 480,360); 
    println ( name+": "+ song+": "+energy+": "+valence+": "+danceability);
    
    TableRow rowRandom2 = table.getRow((int)random(1, 1000)); 
    String name2 = rowRandom2.getString("artist"); 
    String song2 = rowRandom2.getString("title"); 
    float energy2 = rowRandom2.getFloat("energy");
    float valence2 = rowRandom2.getFloat("valence");
    float danceability2 = rowRandom2.getFloat("danceability");
    textSize(20); 
    fill(255);
    text( name2, 880,340); 
    text( song2, 880,360); 
    println ( name2+": "+song2+": "+energy2+": "+valence2+": "+danceability2);
 }
 
 void draw() {
    text("PERSONALITY TEST RESULTS:", 480,500); 

 }
 
 
