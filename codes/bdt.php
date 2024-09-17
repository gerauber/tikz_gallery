\usepackage{tkz-euclide}
...
\begin{tikzpicture}[scale=0.4, every node/.style={transform shape}]
    \tkzDefPoints{-2/0/a, 2/0/b, 2/2/c, -2/2/d, 0/1/e}
    \fill[fill=yellow!20] (a) -- (b) -- (c) -- (d) -- (a);
    \draw[draw=black] (a) -- (b) -- (c) -- (d) -- (a);
    \tkzLabelPoint[right=-1.4cm, yshift=0cm](e){\huge{Node 1}}
    \tkzDefPoints{0/0/f, -6/-2/g, 6/-2/h}
    \draw[draw=gray!50] (f) -- (g);
    \draw[draw=black] (f) -- (h);
    \tkzDefPoint(-4,-0.5){i}
    \tkzDefPoint(5,-0.5){j}
    %\tkzLabelPoint[right=-1.2cm, yshift=0cm](i){\contour{black}{\textcolor{orange!50}{\huge{no}}}}
    %\tkzLabelPoint[right=-1.2cm, yshift=0cm](j){\contour{black}{\textcolor{green!50}{\huge{yes}}}}
    \tkzLabelPoint[right=-1.2cm, yshift=0cm](i){\textcolor{gray!50}{\huge{no}}}
    \tkzLabelPoint[right=-1.2cm, yshift=0cm](j){\textcolor{black}{\huge{yes}}}

    \tkzDefPoints{-8/-4/a, -4/-4/b, -4/-2/c, -8/-2/d, -6/-3/e}
    \fill[fill=yellow!20] (a) -- (b) -- (c) -- (d) -- (a);
    \draw[draw=black] (a) -- (b) -- (c) -- (d) -- (a);
    \tkzLabelPoint[right=-1.4cm, yshift=0cm](e){\huge{Node 2}}
    \tkzDefPoints{-6/-4/f, -12/-6/g, 0/-6/h}
    \draw[draw=gray!50] (f) -- (g);
    \draw[draw=black] (f) -- (h);
    \tkzDefPoint(-10,-4.5){i}
    \tkzDefPoint(-1,-4.5){j}
    %\tkzLabelPoint[right=-1.2cm, yshift=0cm](i){\contour{black}{\textcolor{orange!50}{\huge{no}}}}
    %\tkzLabelPoint[right=-1.2cm, yshift=0cm](j){\contour{black}{\textcolor{green!50}{\huge{yes}}}}
    \tkzLabelPoint[right=-1.2cm, yshift=0cm](i){\textcolor{gray!50}{\huge{no}}}
    \tkzLabelPoint[right=-1.2cm, yshift=0cm](j){\textcolor{black}{\huge{yes}}}


    %\node[text=cyan!30] at (\x+1.3,\y+2.2) {\contour{black}{Monte Carlo}};


    \tkzDefPoints{-2/-8/a, 2/-8/b, 2/-6/c, -2/-6/d, 0/-7/e}
    \fill[fill=yellow!20] (a) -- (b) -- (c) -- (d) -- (a);
    \draw[draw=black] (a) -- (b) -- (c) -- (d) -- (a);
    \tkzLabelPoint[right=-1.4cm, yshift=0cm](e){\huge{Node 3}}
    \tkzDefPoints{0/-8/f, -6/-10/g, 6/-10/h}
    \draw[draw=gray!50] (f) -- (g);
    \draw[draw=black] (f) -- (h);
    \tkzDefPoint(-4,-8.5){i}
    \tkzDefPoint(5,-8.5){j}
    %\tkzLabelPoint[right=-1.2cm, yshift=0cm](i){\contour{black}{\textcolor{orange!50}{\huge{no}}}}
    %\tkzLabelPoint[right=-1.2cm, yshift=0cm](j){\contour{black}{\textcolor{green!50}{\huge{yes}}}}
    \tkzLabelPoint[right=-1.2cm, yshift=0cm](i){\textcolor{gray!50}{\huge{no}}}
    \tkzLabelPoint[right=-1.2cm, yshift=0cm](j){\textcolor{black}{\huge{yes}}}


    \draw[rounded corners=0.4cm, fill=orange!30] (6-2,-2-2) rectangle ++(4,2) node [midway] {};
    \draw[rounded corners=0.4cm, fill=orange!30] (-12-2,-6-2) rectangle ++(4,2) node [midway] {};
    \draw[rounded corners=0.4cm, fill=orange!30] (-6-2,-10-2) rectangle ++(4,2) node [midway] {};
    \draw[rounded corners=0.4cm, fill=orange!30] (6-2,-10-2) rectangle ++(4,2) node [midway] {};

    \tkzLabelPoint[right=-1.2cm, yshift=-1cm](6,-2){\huge{Leaf 1}}
    \tkzLabelPoint[right=-1.2cm, yshift=-1cm](-12,-6){\huge{Leaf 2}}
    \tkzLabelPoint[right=-1.2cm, yshift=-1cm](-6,-10){\huge{Leaf 3}}
    \tkzLabelPoint[right=-1.2cm, yshift=-1cm](6,-10){\huge{Leaf 4}}

\end{tikzpicture}