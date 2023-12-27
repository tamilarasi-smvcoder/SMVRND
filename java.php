<html>
<head>
    <title>Course</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/button.css"/>

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
    .prevent-select 
    {
        -webkit-user-select: none; /* Safari */
        -ms-user-select: none; /* IE 10 and IE 11 */
        user-select: none; /* Standard syntax */
    }
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
<h1>JAVA TUTORIAL</h1>
    <div class="container">
        
        <div class="row">
            <div class="col">
  
            </div>
            <div class="col-10">
                <h5>1. Different Between Javafx , Swing and AWT?</h5>
                <p><b>AWT (Abstract Window Toolkit):</b> AWT is one of the earliest and fundamental GUI frameworks in Java., AWT is platform-dependent and uses native components. It's simple and lightweight but might lack some fancy features.</p>

                <p><b>Swing:</b> It's built on top of AWT but uses its own set of lightweight components. Swing is more customizable and has a more modern look and feel. It's also platform-independent.</p>

                <p><b>JavaFX:</b> JavaFX is the successor to Swing and brings a whole new level of awesomeness. It's designed for rich internet applications and supports a wide range of features, including multimedia and 3D graphics.</p>

                <hr>
                <h5>2.Which one is more responsive? [JavaFX or Swing or AWT]</h5>
                <p>JavaFX tends to have an edge over Swing and AWT. JavaFX was designed with a more modern architecture, leveraging hardware acceleration and providing better performance for rich user interfaces. It supports features like hardware-accelerated graphics rendering, which can contribute to smoother animations and a more responsive user experience.</p>

                <p>Swing, while still quite responsive for many applications, may not perform as well as JavaFX in certain scenarios. AWT, being the oldest, might feel less responsive compared to the more advanced Swing and JavaFX.</p>

                <p>However, the responsiveness of a GUI application can also depend on various factors such as the complexity of the UI, the efficiency of the code, and the hardware specifications of the system running the application. If you're aiming for a highly responsive and modern UI, JavaFX would be a good choice.</p>
                <hr>
                <h5>3.Issue related to screen resolutions or scaling when running your JavaFX application on different computers.</h5>
                <p>JavaFX applications, like many GUI applications, can be affected by differences in screen resolutions and scaling settings.</p>
                <p>Here are a few things you can consider to make your JavaFX application more adaptable to different screen sizes:</p>
                <p>Use Layout Managers: JavaFX provides various layout managers (such as VBox, HBox, etc.) that automatically adjust the placement and size of components based on the available space. This can help ensure that your UI looks consistent across different screen sizes.
                </p>
                <p>
                Avoid Hardcoding Sizes: Try to avoid setting fixed sizes for components. Instead, use relative sizes or constraints so that the UI can adapt to different screen sizes.</p>
                <p>Responsive Design: Consider implementing a responsive design approach, where the UI adjusts dynamically based on the available space. You can use features like percentage-based widths, flexible layouts, and media queries.
                </p>
                <p>Testing on Different Resolutions: Test your JavaFX application on computers with different screen resolutions to identify and address any issues related to scaling.</p>
                <p>Handling Screen Resolution Changes: JavaFX provides the Screen class, which you can use to get information about the screen, including its resolution. You can listen for resolution changes and adjust your UI accordingly.
                </p>
                <p>Remember that the JavaFX application should ideally handle different screen sizes gracefully to provide a consistent and user-friendly experience across various devices.
                </p>
                <hr>
                <h5>4.How to setup javafx environment in netbeans?<h5>
                    <h6>Install NetBeans:</h6>
                    <ul><li>Make sure you have NetBeans installed on your system. If not, download and install the latest version from the official website.</li></ul>
                    <h6>Install JavaFX SDK:</h6>
                    <ul><li>Download and install the JavaFX SDK. You can get it from the official Oracle website or use a standalone SDK if you prefer.</li></ul>
                    <h6>Open NetBeans:</h6>
                    <ul><li>Launch NetBeans on your computer.</li></ul>
                    <h6>Configure JavaFX in NetBeans:</h6>
                    <ul><li>Go to "Tools" in the menu bar and select "Plugins."</li>
                    <li>In the "Available Plugins" tab, search for "JavaFX" and install the "JavaFX" plugin.</li>
                    <li>Set JavaFX Path:</li>
                    <li>After installing the plugin, go to "Tools" again and choose "Java Platforms."</li>
                    <li>Select the default platform or add a new one if needed.</li>
                    <li>Click on the "Add Platform" button and browse to the location where you installed JavaFX SDK. Select the "lib" folder inside the SDK as the platform.
                    </li>
                    </ul>
                    <h6>Create a JavaFX Project:
                    </h6>
                    <ul><li>Now, you're ready to create a JavaFX project. Go to "File" -> "New Project."
                    Choose "JavaFX" from the categories and "JavaFX Application" as the project type. Click "Next."
                    </li></ul>
                    <h6>Configure Project:</h6>
                    <ul>
                    <li>Enter the project name and location.</li>
                    <li>Choose the JavaFX platform you configured earlier.</li>
                    <li>Click "Finish" to create the project.</li>
                    </ul>
                    <h6>Write JavaFX Code:</h6>
                    <ul><li>NetBeans will generate a simple JavaFX application for you. You can find the main class in the src folder. You can modify it to suit your needs.</li></ul>
                    <h6>Run the Project:</h6>
                    <ul><li>Right-click on your project in the Projects window and select "Run." Alternatively, you can use the "Run" button in the toolbar.</li></ul>
                <hr>
                <h5>Step to Make a environment: -<h5>
                <h6>JAVA Installation</h6>
                <ol>
                    <li>Download JDK :  Search oracle java 20 download and open first visible Website
                    </li>
                    <li>Change windows Tab and Download x64 Installer and Install
                    </li>
                    <li>Set System Environment Variables “C:\Program Files\Java\jdk-21\bin”</li>
                    <li>Search CMD open command Prompt and type “ java -version”
                    </li>
                </ol>
                <h6>JavaFx Installation</h6>
                <ol>
                    <li>JavaFx in chrome <a href="https://openjfx.io/">https://openjfx.io/</a> or click the Link</li>
                    <li>Click on Download</li>
                    <li>In the Download Page Select:</li>
                    <dt>
                        <dd>JavaFX Version : <b>20</b></dd>
                        <dd>Operating System : <b>Windows</b></dd>
                        <dd>Architecture : <b>x64</b></dd>
                        <dd>Type : <b>any</b></dd>
                    </dt>
                    
                    <li>Download SDK and jmods</li>
                    <li>Extract SDK and copy “javafx-sdk-21.0.1” this folder and paste inside the java folder in C Disk</li>
                    <li>Extract JMods and copy “javafx-jmods-21.0.1” this folder and paste it inside the java folder in C Disk</li>
                    <li>Set Environment Variable
                        <ul>
                            <li><b>Set User Variable for JavaFX</b>→ Click New Button Variable name : PATH_TO_FX Variable Value : Copy the Lib Folder inside javafx_sdk_20 Ex : “C:\Program Files\Java\javafx-sdk-21.0.1\lib”</li>
                            <li><b>Set User Variable for JMod</b> → Click New Button Variable name : PATH_TO_FX_JMOD Variable Value : Copy the jmods location Ex:”C:\Program Files\Java\javafx-jmods-21.0.1”.</li>
                        </ul>
                    </li>
                </ol>
                <hr>
                <h5>Configure the IDE to Develop JavaFX Application</h5>
                <ol>
                    <li>Open Netbeans IDE</li>
                    <li>Click Tools Menu and Select Libraries Option</li>
                    <li>Click New Library Button in Add Library Manager Dialog Box</li>
                    <li>Type Library Name : JavaFX (Library Type : Class Library”) and Click OK</li>
                    <li>Click Add JAR/Folder Now select javafx libraries Ex :C:\Program Files\Java\javafx-sdk-21.0.1\lib inside this path we have some library file so select all jar file and click “Add JAR/Folder” in Browse JAR/Folder Dialog Box.
                    </li>
                </ol>
                <hr>
                <h5>Create JavaFX Project</h5>
                <ol>
                    <li>Open Netbeans → Click File → click New Project → Click JavaFx→Click JavaFX Application Click Next Button</li>
                    <li>Type Project Name and Click Finish Button</li>
                </ol>
                <h6>Project Structure</h6>
                <p>
                SMV_Certificate_Maker<br>
                |<br>
                |_ _ _Source Package<br>
                |&emsp;&emsp;	|<br>
                |&emsp;&emsp;	|_ _ _ smvcm<br>
                |&emsp;&emsp;&emsp;&emsp;	|<br>
                |&emsp;&emsp;&emsp;&emsp;	|_ _ _ Certificate.jpg<br>
                |&emsp;&emsp;&emsp;&emsp;	|<br>
                |&emsp;&emsp;&emsp;&emsp;	|_ _ _ DatePickerController.java<br>
                |&emsp;&emsp;&emsp;&emsp;   |<br>
                |&emsp;&emsp;&emsp;&emsp;	|_ _ _ SMV_Certificate_Maker.java<br>
                |_ _ _ Test Packages<br>
                |<br>
                |<br>
                |_ _ _ Libraries<br>
                |&emsp;&emsp;	|<br>
                |&emsp;&emsp;	|_ _ _javafx-swt.jar<br>
                |&emsp;&emsp;	|_ _ _javafx.base.jar<br>
                |&emsp;&emsp;	|_ _ _javafx.controls.jar<br>
                |&emsp;&emsp;	|_ _ _javafx.fxml.jar<br>
                |&emsp;&emsp;	|_ _ _javafx.graphics.jar<br>
                |&emsp;&emsp;	|_ _ _javafx.media.jar<br>
                |&emsp;&emsp;	|_ _ _javafx.swing.jar<br>
                |&emsp;&emsp;	|_ _ _javafx.web.jar<br>
                |&emsp;&emsp;	|_ _ _JDK 1.8<br>
                |<br>
                |_ _ _ Text Libraries<br>

                </p>
                
                <hr>
                <h5>Main Code</h5>
                <div class="code-container">
                    <pre>
                        <code class="language-java" id="codeSnippet">
            
package smvcm;
import javafx.application.Application;
import javafx.geometry.Insets;
import javafx.geometry.Pos;
import javafx.scene.Scene;
import javafx.scene.canvas.GraphicsContext;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.control.TextField;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.layout.Background;
import javafx.scene.layout.BackgroundFill;
import javafx.scene.layout.CornerRadii;
import javafx.scene.layout.GridPane;
import javafx.scene.layout.StackPane;
import javafx.scene.paint.Color;
import javafx.scene.paint.CycleMethod;
import javafx.scene.paint.LinearGradient;
import javafx.scene.paint.Stop;
import javafx.scene.text.Font;
import javafx.scene.text.FontWeight;
import javafx.scene.text.Text;
import javafx.stage.FileChooser;
import javafx.stage.Stage;
import java.io.File;
import javafx.geometry.HPos;
import javafx.scene.control.DatePicker;
import javafx.scene.layout.BorderPane;
import javafx.scene.layout.HBox;
import javafx.print.PageLayout;
import javafx.print.PageOrientation;
import javafx.print.Paper;
import javafx.print.Printer;
import javafx.print.PrinterJob;
import javafx.scene.canvas.Canvas;


public class SMV_Certificate_Maker extends Application {
    Stage window;
    public Scene CScene, MScene;

    public static void main(String[] args) {
        launch(args);
    }

    @Override
    public void start(Stage primaryStage) {
        window = primaryStage;
        window.setTitle("SMV Certificate Maker");

        // Create a GridPane layout
        GridPane root = new GridPane();
        root.setAlignment(Pos.CENTER);
        root.setVgap(10);
        root.setHgap(10);
        root.setPadding(new Insets(10));
        // Set gradient background color for GridPane
        BackgroundFill backgroundFill = new BackgroundFill(
                new LinearGradient(0, 0, 1, 1, true, CycleMethod.NO_CYCLE,
                        new Stop(0, Color.ORANGE),
                        new Stop(1, Color.LIGHTGREEN)),
                CornerRadii.EMPTY, Insets.EMPTY);
        root.setBackground(new Background(backgroundFill));

        // Header
        Text head = new Text("SMV CERTIFICATE MAKER");
        head.setFont(Font.font("Tahoma", FontWeight.BOLD, 25));
        head.setFill(Color.GREEN); // Set header text color
        root.add(head, 0, 0, 3, 1); // Spanning 3 columns
        GridPane.setHalignment(head, HPos.CENTER); // Center the header within the columns

        // Name
        Label name = createLabel("Name:");
        root.add(name, 0, 1);

        TextField nf = createTextField("Enter Student Name");
        root.add(nf, 1, 1);

        // Grade
        Label grade = createLabel("Grade:");
        root.add(grade, 0, 2);

        TextField gf = createTextField("Enter Student Grade");
        root.add(gf, 1, 2);

        // From Date
        Label fdate = createLabel("From Date:");
        root.add(fdate, 0, 3);

        DatePicker fromDatepicker = DatePickerController.createFormattedDatePicker("Select From Date");
        root.add(fromDatepicker, 1, 3);

        // To Date
        Label tdate = createLabel("To Date:");
        root.add(tdate, 0, 4);

        DatePicker toDatepicker = DatePickerController.createFormattedDatePicker("Select To Date");
        root.add(toDatepicker, 1, 4);

        // Speed WPM
        Label speed = createLabel("Speed WPM:");
        root.add(speed, 0, 5);

        TextField sf = createTextField("Enter Typing Speed");
        root.add(sf, 1, 5);

        // Accuracy
        Label acc = createLabel("Accuracy:");
        root.add(acc, 0, 6);

        TextField accf = createTextField("Enter Accuracy");
        root.add(accf, 1, 6);

        // Photo
        Label photoLabel = createLabel("Passport Photo:");
        root.add(photoLabel, 0, 7);

        ImageView photoImageView = new ImageView();
        photoImageView.setFitWidth(100);
        photoImageView.setFitHeight(100);
        root.add(photoImageView, 1, 7);

        Button browseButton = new Button("Browse");
        browseButton.setStyle("-fx-font-size:16; -fx-padding: 8 16;-fx-font-weight:bold; -fx-text-fill: #ffffff; -fx-background-color: orange");
        browseButton.setOnAction(e -> {
            FileChooser fileChooser = new FileChooser();
            fileChooser.getExtensionFilters().add(new FileChooser.ExtensionFilter("Image Files", "*.png", "*.jpg", "*.jpeg", "*.gif"));
            File selectedFile = fileChooser.showOpenDialog(window);

            if (selectedFile != null) {
                Image selectedImage = new Image(selectedFile.toURI().toString());
                photoImageView.setImage(selectedImage);
            }
        });
        root.add(browseButton, 1, 8);

        // Create Button
        Button createbtn = new Button("Create");
        createbtn.setStyle("-fx-font-size:16; -fx-padding: 8 16;-fx-font-weight:bold; -fx-text-fill: #ffffff; -fx-background-color: green");
        root.add(createbtn, 2, 8);
        createbtn.setOnAction(e -> {
            String studentName = nf.getText();
            String studentGrade = gf.getText();
            String fromDate = fromDatepicker.getValue().toString();
            String toDate = toDatepicker.getValue().toString();
            String typingSpeed = sf.getText();
            String accuracy = accf.getText();
            // Get the Image from the ImageView
            Image selectedImage = photoImageView.getImage();

            // Create Text objects for different pieces of information
            Text nameText = new Text(studentName);
            nameText.setFont(new Font(14));

            Text gradeText = new Text(studentGrade);
            gradeText.setFont(new Font(14));
            
            Text FDText = new Text(fromDate);
            nameText.setFont(new Font(14));

            Text TDText = new Text(toDate);
            gradeText.setFont(new Font(14));
            
            Text SpText = new Text(typingSpeed);
            nameText.setFont(new Font(14));

            Text AcText = new Text(accuracy);
            gradeText.setFont(new Font(14));

            // Pass the Text objects to the CerWindow method
            window.setScene(CerWindow(nameText, gradeText,FDText,TDText,SpText,AcText,selectedImage));
        });
        Button clearbtn = new Button("Clear All");
        clearbtn.setStyle("-fx-font-size:16; -fx-padding: 8 16;-fx-font-weight:bold; -fx-text-fill: #ffffff; -fx-background-color: red");
        root.add(clearbtn, 0, 8);
        clearbtn.setOnAction(e -> {
            nf.clear(); // Clear the Name TextField
            gf.clear(); // Clear the Grade TextField
            fromDatepicker.setValue(null); // Clear the From Date DatePicker
            toDatepicker.setValue(null); // Clear the To Date DatePicker
            sf.clear(); // Clear the Speed WPM TextField
            accf.clear(); // Clear the Accuracy TextField
            photoImageView.setImage(null); // Clear the Photo ImageView
        });
        // Scene setup
        MScene = new Scene(root, 500, 500);
        window.setResizable(false);
        window.setScene(MScene);
        window.show();
    }

    // Helper method to create a formatted text field
    private TextField createTextField(String promptText) {
        TextField textField = new TextField();
        textField.setPromptText(promptText);
        textField.setStyle("-fx-font-size: 14;-fx-font-weight:bold;");
        return textField;
    }

    // Helper method to create a formatted label
    private Label createLabel(String labelText) {
        Label label = new Label(labelText);
        label.setStyle("-fx-font-size: 18; -fx-text-fill: blue;-fx-font-weight:bold;"); // Set label font size and color
        return label;
    }

    public Scene CerWindow(Text nameText, Text gradeText,Text FDText,Text TDText,Text SpText,Text AcText,Image selectedImage) {
        // Create a Canvas
        Canvas canvas = new Canvas(842, 595);
        GraphicsContext gc = canvas.getGraphicsContext2D();

        // Load the image
        Image backgroundImage = new Image("file:Certificate.jpg");
        //file:/C:/Users/SMV/OneDrive/Documents/NetBeansProjects/SMV_Certificate_Maker/src/smvcm/Certificate.jpg
        //C:\Users\SMV\OneDrive\Documents\NetBeansProjects\SMV_Certificate_Maker\src\smvcm\Certificate.jpg

        // Draw the background image on the canvas
        gc.drawImage(backgroundImage, 0, 0, 842, 595);

        // Draw the Text on the canvas
        gc.setFont(Font.font("Arial", FontWeight.BOLD, 14));
        gc.setFill(Color.BLACK);
        gc.fillText(nameText.getText(), 472, 255); // Adjust the coordinates as needed
        gc.fillText(gradeText.getText(), 170, 352); // Adjust the coordinates as needed
        gc.fillText(FDText.getText(), 380, 352); // Adjust the coordinates as needed
        gc.fillText(TDText.getText(), 600, 352); // Adjust the coordinates as needed
        gc.fillText(SpText.getText(), 240, 473); // Adjust the coordinates as needed
        gc.fillText(AcText.getText(), 240, 505); // Adjust the coordinates as needed
        // Draw the photo on the canvas
        gc.drawImage(selectedImage, 370, 420, 100, 100); // Adjust the coordinates and dimensions as needed

        Button prtbtn = new Button("Print");
        prtbtn.setStyle("-fx-font-size:16; -fx-padding: 8 16;-fx-font-weight:bold; -fx-text-fill: #ffffff; -fx-background-color: green");
        Button back = new Button("Back");
        back.setStyle("-fx-font-size:16; -fx-padding: 8 16;-fx-font-weight:bold; -fx-text-fill: #ffffff; -fx-background-color: orange");
        
        back.setOnAction(e->{
            window.setScene(MScene);
        });
        
        prtbtn.setOnAction(e -> printCanvas(canvas));
        
       
        HBox buttonBox = new HBox(10, back, prtbtn);
        buttonBox.setAlignment(Pos.BOTTOM_CENTER);

        BorderPane borderPane = new BorderPane();
        borderPane.setCenter(new StackPane(canvas));
        borderPane.setBottom(buttonBox);
        borderPane.setPadding(new Insets(0,0,40,0));
        
        // Create a Scene with the Canvas as the root
        Scene scene = new Scene(borderPane, 842, 650);     
  return scene;
}


private void printCanvas(Canvas canvas) {
        PrinterJob printerJob = PrinterJob.createPrinterJob();

        if (printerJob != null) {
            PageLayout pageLayout = printerJob.getPrinter().createPageLayout(Paper.A4, PageOrientation.LANDSCAPE, Printer.MarginType.HARDWARE_MINIMUM);

            // Calculate scaling factor to fit the content within the printable area
            double scaleFactor = calculateScaleFactor(canvas.getWidth(), canvas.getHeight(), pageLayout.getPrintableWidth(), pageLayout.getPrintableHeight());

            // Apply scaling
            canvas.getTransforms().add(new javafx.scene.transform.Scale(scaleFactor, scaleFactor));

            boolean success = printerJob.printPage(pageLayout, canvas);

            if (success) {
                printerJob.endJob();
            }
        }
    }

    private double calculateScaleFactor(double contentWidth, double contentHeight, double printableWidth, double printableHeight) {
        // Calculate scaling factors for width and height
        double widthScale = printableWidth / contentWidth;
        double heightScale = printableHeight / contentHeight;

        // Use the minimum scaling factor to maintain aspect ratio
        return Math.min(widthScale, heightScale);
    }
}

            </code>
        </pre>

        <button class="copy-button" data-clipboard-target="#codeSnippet">Copy Code</button>
        <p class="text-near-button">SMV_Certificate_Maker.java</p>
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
                <h5>Date Picker Controller Code</h5>
                <div class="code-container">
                    <pre>
                        <code class="language-java" id="codeSnippet">
                        package smvcm;

import javafx.scene.control.DatePicker;
import javafx.scene.control.TextField;

public class DatePickerController {

    public static DatePicker createFormattedDatePicker(String promptText) {
        DatePicker datePicker = new DatePicker();
        datePicker.setPromptText(promptText);
        datePicker.setStyle("-fx-font-size: 14;-fx-font-weight:bold;");
        return datePicker;
    }
}

                        </code>
                    </pre>

                    <button class="copy-button" data-clipboard-target="#codeSnippet">Copy Code</button>
                    <p class="text-near-button">DatePickerController.java</p>
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