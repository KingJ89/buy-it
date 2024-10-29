import requests
from bs4 import BeautifulSoup
import os

url = "https://example.com/products"
response = requests.get(url)
soup = BeautifulSoup(response.text, "html.parser")

# Create an images folder if not exist
if not os.path.exists("images"):
    os.makedirs("images")

for img in soup.find_all("img"):
    img_url = img.get("src")
    img_data = requests.get(img_url).content
    with open(f"images/{os.path.basename(img_url)}", "wb") as img_file:
        img_file.write(img_data)

