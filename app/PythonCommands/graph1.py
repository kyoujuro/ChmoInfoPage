from datetime import datetime as dt
from bokeh.plotting import figure, show, output_file
d = [0, 1, 4, 9, 16]
p = figure()
p.line(range(len(d)), d) # 第1引数がx軸、第2引数がy軸
print(p)