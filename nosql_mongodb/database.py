import pymongo
connection_url="mongodb://localhost:27017/"

client=pymongo.MongoClient(connection_url)
client.list_database_names()
database_name="agencetk"
# database_name="student_database"
student_db=client[database_name]
a=student_db.list_collection_names()
collection_name="computer science"
collection=student_db[collection_name]

document={"Name":"Raj",
"Roll No ":  153,
"Branch ": "CSE"}
collection.insert_one(document)
query={"Name":"Raj"}
print(collection.find_one(query))
query={"Branch":"CSE"}
result=collection.find(query)
for i in result:
    print(i)
result=collection.find({}).limit(2)
for i in result:
    print(i)
query={"Roll No ":{"$eq":153}}
print(collection.find_one(query))






