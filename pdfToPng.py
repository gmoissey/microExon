"""
Auhtor: Moisseyev Gleb
2020 09 25

Little script to convert pdf files into png
"""

import glob

from pdf2image import convert_from_path

files = glob.glob('/Users/admin/Desktop/laravel/microExon/logo_files/*.pdf')

for file_name in files:
    pages = convert_from_path(file_name, 500)

    for page in pages:
        page.save(file_name[:len(file_name) - 3] + 'png', 'PNG')
