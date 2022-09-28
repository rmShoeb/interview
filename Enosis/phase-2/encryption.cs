using System;
using System.Text;

class Program{
	static void Main(string[] args){
    	string str = "UAE have done really well to keep this under 180 after the start Bangladesh got";
        var sb = new StringBuilder();
        var crypto = new StringBuilder();
        int rows, cols;
        int idx;
        
        foreach(var word in str.Split()){
        	sb.Append(word);
        }
        cols = Convert.ToInt32(Math.Ceiling(Math.Sqrt(sb.Length)));
        rows = Convert.ToInt32(Math.Floor(Math.Sqrt(sb.Length)));
        if((cols*rows) < sb.Length) rows++;
        
        for(int c=0; c<cols; c++){
        	if(crypto.Length != 0) crypto.Append(" ");
        	for(int r=0; r<rows; r++){
            	idx = c+(r*rows);
                if(idx<sb.Length){
                	crypto.Append(sb[idx]);
                }
            }
        }
        Console.WriteLine(crypto);
    }
}