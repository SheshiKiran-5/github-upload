var MongoClient = require('mongodb').MongoClient;
var url = "mongodb://localhost:27017/";
MongoClient.connect(url, function(err, db){
if(err) throw err;
var dbo = db.db("mydb");
var myobj ={name: 'Moin', address: 'Vizag SN28'};
dbo.collection("student").insertOne(myobj, function(err, res){
if(err) throw err;
console.log("Number of documents inserted: 1");
db.close();});
});
var MongoClient = require('mongodb').MongoClient;
var url = "mongodb://localhost:27017/";
MongoClient.connect(url, function(err, db){
if(err) throw err;
var dbo = db.db("mydb");
var myobj =[
{ name: 'Leni', address: 'Chennai 22'},
{ name: 'John', address: 'Chennai 71'},
{ name: 'Amy', address: 'Apple St 652'},
{ name: 'Peter', address: 'Mountain 21'},
{ name: 'Michael', address: 'Valley 345'},
{ name: 'Sandy', address: 'Ocean St 2'},
];
dbo.collection("student").insertMany(myobj, function(err, res){
if(err) throw err;
console.log("Number of documents inserted: "+ res.insertedCount);
db.close();
});
});