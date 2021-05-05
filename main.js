const DAO = require('@beweb/dao')
const db = new DAO.MongoDB('mongodb+srv://admin:admin@cluster0.feftv.mongodb.net/SOTDL?retryWrites=true&w=majority')

var express = require("express");
var app = express();

app.use((req,res,next)=>{
    res.setHeader("Access-Control-Allow-Origin","*");
    res.setHeader("Access-Control-Allow-Headers","*");
    next();
    })
    
    app.use(express.json());
    app.use(express.urlencoded({ extended: true }));




/**
 * Récupère tout les sorts
 */
app.get("/spells",(req,res)=>{

        let code = 404;
        let content = "Aucune ressources";
    
        db.getAll('spells', console.log);
        
        sendResponse(code, content, res);
    })

/**
 * Ajoute un sort à la lsite des sorts
 */
app.post("/spells",(req,res)=>{

        let code = 400;
        let content = "Mauvaise requête";
    
        
    
        sendResponse (code, content, res);
    })