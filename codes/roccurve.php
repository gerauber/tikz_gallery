\usepackage{tkz-euclide}
\usepackage{pgfplots}
\usepgfplotslibrary{fillbetween}
\pgfplotsset{ticks=none}
...
\begin{tikzpicture}[scale=1, every node/.style={transform shape}]
    \begin{axis}[axis x line=center, axis line style = thick, xlabel={FPR}, xlabel style={below right}, xmin=-1, xmax=12,
        axis y line=center, axis line style = thick, ylabel={TPR}, ylabel style={above left}, ymin=-1,ymax=12]

        \addplot+[name path=f,color=black,mark=none,samples=200,domain=0:10,smooth,thick] {(100*x)^(1/3)} node[above,yshift=0.5cm,pos=0.5,color=black] {ROC};

        \addplot+[color=black,mark=none,samples=200,domain=0:10,smooth,thick,dashed] {x} node[below,yshift=-2cm,pos=0.8,color=black] {AUC};

        \addplot+[color=black,mark=none,smooth,thick] coordinates {(10, 0) (10, 10)};
        
        \addplot+[color=black,mark=none,smooth,thick,samples=200,domain=0:10] {10};
        
        \path[name path=axis] (axis cs:0,0) -- (axis cs:10,0);
        
        \addplot [thick, color=green, fill=green, fill opacity=0.2]
        fill between[of=f and axis, soft clip={domain=0:10},];
        
        \addplot+[color=black,mark=none,smooth,thick] coordinates {(10, 0) (10, 0)} node[below,yshift=0cm,pos=0.8,color=black] {1};
        
        \addplot+[color=black,mark=none,smooth,thick] coordinates {(-0.5, 0) (-0.5, 0)} node[below,yshift=0cm,pos=0.8,color=black] {0};
        
        \addplot+[color=black,mark=none,smooth,thick] coordinates {(-0.5, 10) (-0.5, 10)} node[below,yshift=0.25cm,pos=0.8,color=black] {1};
        
    \end{axis}
\end{tikzpicture} 