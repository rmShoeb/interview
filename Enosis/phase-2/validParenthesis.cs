using System;
using System.Text;
using System.Collections.Generic;

class Program{
	static void Main(string[] args){
    	string str = "((({{{[]]}})))";
        var st = new Stack<char>();
        bool match;
        
        foreach(var c in str){
        	match = true;
        	switch(c){
            	case '(':
                case '{':
                case '[':
                	st.Push(c);
                    break;
                case ')':
                	if(st.Peek() == '(') st.Pop();
                    else match = false;
                    break;
                case '}':
                	if(st.Peek() == '{') st.Pop();
                    else match = false;
                    break;
                case ']':
                	if(st.Peek() == '[') st.Pop();
                    else match = false;
                    break;
            }
            if(!match) break;
        }
        if(st.Count == 0) Console.WriteLine(true);
        else Console.WriteLine(false);
    }
}