import { Composant } from '../composant';
import React, { useState } from 'react';


function Formulaire() {

  const [nom, setNom] = useState('');
  const [prenom, setPrenom] = useState('');
  const [adresse, setAdresse] = useState('');
  const [email, setEmail] = useState('');

  const [codePostal, setPostal] = useState('');
  const [dateDeNaissance, setDate] = useState('');
  const [sex, setSex] = useState('');

  const handleSubmit = (event) => {
    event.preventDefault();

    alert(`Formulaire soumit...`);

    /*InsertToBDD(
      nom,
      prenom,
      adresse,
      codePostal,
      sex,
      dateDeNaissance,
      email
    )*/

  }
  const handleChange = (event) => {
    setSex(event.target.value)
  }


  return (

    <div>
        <Composant/>

      <form onSubmit={handleSubmit}>
        <div>
          <label>
            Nom :
            <input type="text" name="nom"
              value={nom} onChange={(e) => setNom(e.target.value)
              }
            />
          </label>
          <label>
            Prenom :
            <input type="text" name="prenom"
              value={prenom} onChange={(e) => setPrenom(e.target.value)
              }
            />
          </label>
        </div>

        <div>
          <label>
            Adresse :
            <input type="text" name="Adresse"
              value={adresse} onChange={(e) => setAdresse(e.target.value)
              }
            />
          </label>
          <label>
            Email :
            <input type="email" name="email"
              value={email} onChange={(e) => setEmail(e.target.value)
              }
            />
          </label>

        </div>

        <div>
          <label>
            Code postal :
            <input type="number" name="postal"
              value={codePostal} onChange={(e) => setPostal(e.target.value)
              }
            />
          </label>
          <label>
            Date de naissance :
            <input type="date" name="naissance"
              value={dateDeNaissance} onChange={(e) => setDate(e.target.value)
              }
            />
          </label>
          <select value={sex} onChange={handleChange}>
            <option value="M">Homme</option>
            <option value="F">Femme</option>
            <option value="X">X</option>
          </select>

        </div>
        <input type="submit" value="Envoyer" />
      </form>

    </div>


  );
}

export { Formulaire };