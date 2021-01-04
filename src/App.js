import React, { useState } from "react";
import Axios from 'axios'
import Form from "react-bootstrap/Form";
import Button from "react-bootstrap/Button";
import "./App.css";

function App() {
  const [emaillog, setEmail] = useState("");
  const [passwordlog, setPassword] = useState("");

  const[LoginStatus, setLoginStatus]= useState("");

  const login = () => {
    Axios.post('http://localhost3000/login', {
      email: emaillog,
      password: passwordlog,
  }).then((response) => {
    if (response.data.message) {
      setLoginStatus(response.data.message);
    } else {
      setLoginStatus(response.data[0].email);
    }
  });
  };
  /*<function validateForm() {
    return email.length > 0 && password.length > 0;
  }

  function handleSubmit(event) {
    event.preventDefault();
  }*/

  return (
    <div className="App">
      
      <Form action="login.php" method="POST">
        
        <div className="title">Log in to Your Account</div>
        <div className="field">
        <Form.Group >
         
          <Form.Control
          placeholder="Email"
            type="email"
            name="uemail"
           
            onChange={(e) => {setEmail(e.target.value);}}
          />
        </Form.Group></div>
        <div className="field">
        <Form.Group  controlId="password">
         
          <Form.Control
          placeholder="Password"
            type="password"
            name="upass"
            onChange={(e) => setPassword(e.target.value)}
          />
        </Form.Group> </div>
        <button className="button"  onClick={login}>
         Login
        </button>
        <br/>
        Do not have an account? <a href="#">Register</a>
      </Form>
      <h1>{LoginStatus}</h1>
    </div>
  );
}
export default App;
