from flask import Flask
from flask import request
from .fastworkout import execute

app = Flask(__name__)

@app.route('/execute')
def hello_world():
    user = request.args.get('user')
    execute(user)
    return 'done'