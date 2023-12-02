function afficher()
{
    
    const b=document.querySelector(".play");
 const c=document.querySelector(".inside");
 c.innerHTML=`
 <p><br><br></p>
 <table  border=1>
 <th>News-id</th>
 <th>Titre</th>
 <th>Resume</th>
 <th>Contenu</th>
 <th>Date_publication</th>
${b.innerHTML}
 </table>
 <br><br>
 
 <div style="display:flex; flex-direction:row; height:40px; justify-content:space-around;">

 <button type="button" onclick="ajouter();
 " style="background-color:black;border:0px solid;border-radius:
 5px;color:white; padding:0px 20px; cursor:pointer;">Ajouter</button>
 
 <button padding:0px; type="button" onclick="modifier();" style="background-color:black;border:0px solid;border-radius:
 5px;color:white;padding:0px 20px; cursor:pointer;">Modifier</button>

 <button type="button" onclick="supprimer();" style="background-color:black;border:0px solid;border-radius:
 5px;color:white;padding:0px 20px; cursor:pointer;">Supprimer</button>

 <button type="button" onclick="reloadpage();" style="background-color:black;border:0px solid;border-radius:
 5px;color:white;padding:0px 10px; cursor:pointer;">Afficher les mise a jour</button>
 </div>`;
 
}
//fonction inserer new dans le tableau news
function ajouter(){
    const a=document.querySelector(".inside");
    a.innerHTML=`
    <br><br><br>
    <form  method="post">
    <table  border=1 style="width:50%; height:400px;">
    <th style="height:50px;">News-id</th>
    <th>Titre</th>
    <th>Resume</th>
    <th>Contenu</th>
    <tr>
    <td><input type="number" name="news"></td>
    <td><textarea name="titre"></textarea></td>
    <td><textarea style="height:330px;"  name="resume"></textarea></td>
    <td><textarea style="height:330px;"  name="contenu"></textarea></td>
    </tr>
    </table>
    <br>
    <button 
    style="background-color:black;border:0px solid;border-radius:
 5px;color:white; margin-left:100%; padding:10px 20px; cursor:pointer;"
    type="submit">Valider</button>
    </form>
    `;
    //;
}
//function supprimer

function supprimer()
{
    const a=document.querySelector(".inside");
    a.innerHTML=`
    <br><br><br>
    <form  method="post">
    <table  border=1 >
    <th style="height:50px;">News-id</th>
    <tr>
    <td><input type="number" name="id"></td>
    </tr>
    </table>
    <br>
    <button 
    style="background-color:black;border:0px solid;border-radius:
 5px;color:white; margin-right:70%; padding:10px 20px; cursor:pointer;"
    type="submit">Valider</button>
    </form>
    `;
   // afficher();
}

function reloadpage()
{
location.reload();
}
function modifier(){
    const a=document.querySelector(".inside");
    a.innerHTML=`
    <br><br><br>
    <form  method="post">
    <table  border=1 style="width:50%; height:400px;">
    <th style="height:50px;">News-id</th>
    <th>Titre</th>
    <th>Resume</th>
    <th>Contenu</th>
    <tr>
    <td><input type="number" name="news1"></td>
    <td><textarea name="titre1"></textarea></td>
    <td><textarea style="height:330px;"  name="resume1"></textarea></td>
    <td><textarea style="height:330px;"  name="contenu1"></textarea></td>
    </tr>
    </table>
    <br>
    <button 
    style="background-color:black;border:0px solid;border-radius:
 5px;color:white; margin-left:100%; padding:10px 20px; cursor:pointer;"
    type="submit">Valider</button>
    </form>
    `;
}