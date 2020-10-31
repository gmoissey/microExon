"""
Auhtor: Moisseyev Gleb
2020 09 25

Little script to convert pdf files into png

Usage: python pdfToPng.pu -d
-d - to delete .pdf files
"""

import glob
import os

from progress.bar import Bar
from pdf2image import convert_from_path
import sys

files = glob.glob('/Users/admin/Desktop/laravel/microExon/msa_files/*.pdf')
bar = Bar('Processing', max=len(files))


if(sys.argv[1] == '-d'):
    for file_name in files:
        pages = convert_from_path(file_name, 500)

        for page in pages:
            page.save(file_name[:len(file_name) - 3] + 'png', 'PNG')
        os.remove(file_name)
        bar.next()
else:
    for file_name in files:
        pages = convert_from_path(file_name, 500)

        for page in pages:
            page.save(file_name[:len(file_name) - 3] + 'png', 'PNG')

        bar.next()

bar.finish()
