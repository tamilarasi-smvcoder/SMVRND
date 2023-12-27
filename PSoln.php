<html>
<head>
    <title>Course</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="button.css"/>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.2.0/styles/monokai-sublime.min.css">
    <!-- Choose a different style from https://github.com/highlightjs/highlight.js/tree/main/src/styles -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.2.0/highlight.min.js"></script>
    <script>hljs.highlightAll();</script>
    <!--<link rel="stylesheet" href="fonttext.css"/>-->
    
</head>
<style>
    body{
        background-color:green;
    }
    .container{
        margin-top:2%;
        background-color:white;
        padding:30px;
    }
    /*.prevent-select 
    {
        -webkit-user-select: none; /* Safari */
        /*-ms-user-select: none; /* IE 10 and IE 11 */
        /*user-select: none; /* Standard syntax */
    /*}*/
    hr
    {
        border:2px solid black;;
    }
    p{
        text-align:justify;
    }
    ul{
        text-align:justify; 
    }
    .hljs {
            background-color: #404040;
            color: #fff; /* Set text color to white for better visibility */
            padding: 10px;
            border-radius: 5px;
            overflow-x: auto; /* Enable horizontal scroll if needed */
        }
    /* Style the container for code and button */
    .code-container {
            position: relative;
            background-color: #282c34;
            color: #abb2bf;
            padding: 30px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        /* Style the copy button */
        .copy-button {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: GREEN;
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 5px;
            cursor: pointer;
        }
        .text-near-button {
            position: absolute;
            top: 10px;
            left: 30px;
            margin-top: 10px;
            color: #61dafb; /* Match button color for consistency */
            font-size:20px;
        }
        h1{
            margin-top: 2%;
            text-align : center;
            color:yellow;

        }
    

</style>
<body class="prevent-select">
<h1 class="Purples">JAVA PROBLEM SOLVING</h1>
    <div class="container">
        
        <div class="row">
            <div class="col">
  
            </div>
            <div class="col-10">
                
                <h5>1.	Find Odd or Even Using Bitwise Operator</h5>
                <div class="code-container">
                    <pre>
                        <code class="language-java" id="ps1">
public class Main 
{
    public static void main(String[] args) 
    {
        int n = 85;
        if(isEven(n))
            System.out.println("Even");
        else
            System.out.println("Odd");
    }
    static boolean isEven(int n)
    {
        if((n&1)==0)
            return true;
        else    
            return false;
    }
}

                        </code>
                    </pre>

                    <button class="copy-button" data-clipboard-target="#ps1">Copy Code</button>
                    <p class="text-near-button">Java</p>
                </div>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.8/clipboard.min.js"></script>
                <script>
                    document.addEventListener('DOMContentLoaded', function () {
                        var clipboard = new ClipboardJS('.copy-button');

                        clipboard.on('success', function (e) {
                            e.clearSelection();
                            console.log('Code copied to clipboard');
                        });

                        clipboard.on('error', function (e) {
                            console.error('Failed to copy code to clipboard');
                        });
                    });
                </script>

                <hr>

                <h5>2. Find Last Digit Of a^b for Large Numbers</h5>
                <div class="code-container">
                    <pre>
                        <code class="language-java" id="ps2">
public class Main 
{
    public static void main(String[] args) 
    {
        String a = "32", b = "16";
        Soln ob = new Soln();
        System.out.println(ob.getLastDigit(a,b));
    }
}
class Soln
{
    static int getLastDigit(String a, String b)
    {
        if(a.length()==1 && a.equals("0") && b.length()==1 && b.equals("0"))
            return 1;
        if(a.length()==1 && a.equals("0"))
            return 0;
        if(b.length()==1 && b.equals("0"))
            return 1;
        int exponent = (Modulo(4,b)==0?4:Modulo(4,b));
        int result = (int)(Math.pow(a.charAt(a.length()-1)-'0',exponent));
            return result%10;
    }
    static int Modulo(int a, String b)
    {
        int res = 0;
        for(int i=0;i&lt;b.length();i++)
        {
            res = (res*10+b.charAt(i)-'0')%a;
        }
        return res;
    }
}
                        </code>
                    </pre>

                    <button class="copy-button" data-clipboard-target="#ps2">Copy Code</button>
                    <p class="text-near-button">Java</p>
                </div>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.8/clipboard.min.js"></script>
                <script>
                    document.addEventListener('DOMContentLoaded', function () {
                        var clipboard = new ClipboardJS('.copy-button');

                        clipboard.on('success', function (e) {
                            e.clearSelection();
                            console.log('Code copied to clipboard');
                        });

                        clipboard.on('error', function (e) {
                            console.error('Failed to copy code to clipboard');
                        });
                    });
                </script>




            </div>
            <div class="col">
  
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>