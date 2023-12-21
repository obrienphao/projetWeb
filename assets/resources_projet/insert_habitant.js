//import Header from './components/header';



function Insert_habitant(){

    return(
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
        <input type="submit" value="Envoyer" />
      </form>
    );
}

export default Insert_habitant;