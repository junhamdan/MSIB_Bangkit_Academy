from dotenv import load_dotenv
import os
load_dotenv()

DEVELOPER_KEY = os.getenv('DEVELOPER_KEY')
PORT = os.getenv('PORT', 8080)