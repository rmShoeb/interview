using System;
using System.Text;
class Program{
	static void Main(string[] args){
    	string toSplit = "UAE have done really well to keep this under 180 after the start Bangladesh got, but the visitors would be happy about bettering their score from the first game. Miraz gave the team a good base but got a shocker of a LBW call when the ball pitched miles outside leg stump. Rest of the batters chipped in. Afif and Mosaddek fell when they looked to push. Young left-arm spinner Aayan bagged two wickets, while Aryan and Meiyappan were impressive too. The slower balls are sticking. The hosts need to bat really well to pull this off and hope for some dew as well. Back in 15 for the chase.";
        int lineMaxLength = 50;
        StringBuilder line = new StringBuilder();
        
        foreach(var word in toSplit.Split()){
        	if(line.Length == 0) line.Append(word);
            else if(line.Length < lineMaxLength) line.Append($" {word}");
            else{
            	Console.WriteLine(line);
                line.Clear();
            }
        }
    }
}