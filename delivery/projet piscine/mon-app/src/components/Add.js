import React, { useState } from 'react';
import '../node_modules/bootstrap/dist/css/bootstrap.min.css';
import './App.css';
import axios from 'axios';


const Add = (props) => {

    if(localStorage.getItem("token")){
        props.history.push("/update");
    }

    const [Description, setDescription] = useState('');
    const [Titre,setTitre] = useState('');
    const [Image, setImage] = useState('');
    const [Prix,setPrix] = useState('');


    var data = {
        Description: Description,
        Titre: Titre,
        Image: Image,
        Prix: Prix,
        
    }

    const validate = (e) => {
        axios.post('http://localhost:8080/create_account', data).then(function (response) {
            console.log(response);
        })
            .catch(function (error) {
                console.log(error);
            });
    };
    return (
      <div className="container">
          <div className="card text-center">
              <div className="card-body">
                  <h1>Ajouter un Article</h1>
                  <div className="form-group">
                      <label>Titre :</label>
                      <input type="text"
                          className="form-control"
                          placeholder="Titre"
                          required
                          onChange={(event) => setDescription(event.target.value)}></input>
                  </div>
                  <div className="form-group">
                      <label>Description :</label>
                      <input type="text"
                          className="form-control"
                          placeholder="Description"
                          required
                          onChange={(event) => setTitre(event.target.value)}></input>
                  </div>
                  <div className="form-group">
                      <label>Image :</label>
                      <input type="file"
                          className="form-control"
                          placeholder="Image"
                          required
                          onChange={(event) => setImage(event.target.value)}></input>
                  </div>

                  <div className="form-group">
                      <label>Prix :</label>
                      <input type="text"
                          className="form-control"
                          placeholder="Prix"
                          required
                          onChange={(event) => setPrix(event.target.value)}></input>
                  </div>
               
                  <button>valide</button>
           
              </div>
          </div>
      </div>

      
  )
}
export default Add;