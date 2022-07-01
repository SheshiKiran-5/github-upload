var MongoClient = require('mongodb').MongoClient;
var url = "mongodb://localhost:27017/";
var myquery = { address: "Chennai 71" };
var myquery1 = { address: /^L/ };
var myquery2 = { address: 'Mountain 21' };
var myquery3 = { address: /^P/ };
var newvalues = { $set: {name: "Jaff", address: "Chennai 88" } };
var newvalues1 = { $set: {name: "Sam", address: "Delhi 96" } };
MongoClient.connect(url, function(err, db){
if(err) throw err;
var dbo = db.db("mydb");
dbo.collection("student").updateOne(myquery, newvalues, function(err, res) {
if (err) throw err;
console.log(res);
});
dbo.collection("student").updateMany(myquery1, newvalues1, function(err, res) {
if (err) throw err;
console.log(res);
});
dbo.collection("student").deleteOne(myquery2, function(err, result) {
if (err) throw err;
console.log(result);
});
dbo.collection("student").deleteMany(myquery3, function(err, result) {
if (err) throw err;
console.log(result);
});
});