<%@ page import="java.sql.*" %>
<%@ page import="java.io.*" %>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Sign Up</title>
</head>
<body>
    <hr>

    <%
    String DB_url = "jdbc:mysql://localhost:3306/doss";
    String Username="root";
    String Password="root";

    String name = request.getParameter("name");
    String mail = request.getParameter("email");
    String password = request.getParameter("password");
    String confirmPassword = request.getParameter("Confirmpassword");

    if (password != null && confirmPassword != null && password.equals(confirmPassword)) {
        try{
            Class.forName("com.mysql.cj.jdbc.Driver");
            Connection conn = DriverManager.getConnection(DB_url, Username, Password);
            String query = "INSERT INTO CropUsers (name, email, password) VALUES (?, ?, ?)";
            PreparedStatement pstmt = conn.prepareStatement(query);
            pstmt.setString(1, name);
            pstmt.setString(2, mail);
            pstmt.setString(3, password);
            pstmt.executeUpdate();
            out.print("<br>Account Created Successfully<br>");
            conn.close();
        } catch(Exception e) {
            out.println(e);
        }
    } else {
        out.println("<br>Passwords do not match or are null!<br>");
    }
    %>
    <button><a href="job.html">Update the Job</button>
</body>
</html>
