import bcrypt
import os

password = b"Zuidvrucht21!"
hashed = bcrypt.hashpw(password, bcrypt.gensalt())
print(hashed.decode('utf-8'))

script_dir = os.path.dirname(os.path.abspath(__file__))
hash_file_path = os.path.join(script_dir, "hash.txt")

with open(hash_file_path, "w") as file:
    file.write(hashed.decode('utf-8'))