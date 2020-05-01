# problem 2 
# logging in
import sqlite3

conn=sqlite3.connect("user.db")

c=conn.cursor()

username = input("Enter the user name")
password=input("Enter the password")

c.execute("SELECT * FROM register WHERE username=? AND password=?",(username,password))

arr=c.fetchone()

conn.commit()

if len(arr):
	print("Successfully logged in  "+username)
else:
	print("Please enter correct credentials")

conn.close()