# Creating database and table
import sqlite3

conn=sqlite3.connect("user.db")

c=conn.cursor()

c.execute("""CREATE TABLE register(
			username TEXT,
			password TEXT)""")

conn.commit()

conn.close()