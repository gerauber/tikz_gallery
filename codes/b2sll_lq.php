\usepackage{tikz}
\usepackage[compat=1.1.0]{tikz-feynman}
...
\begin{tikzpicture}
\begin{feynman}[small]
    \vertex (a1) {\(b\)}; 
    \vertex[right=1.2cm of a1] (a2);
    \vertex[right=0.8cm of a2] (a5);
    \vertex[right=0.8cm of a5] (a3);
    \vertex[right=1.2cm of a3] (a4) {\(s\)};
    
    \vertex[below=2em of a1] (b1); 
    \vertex[below=2em of a4] (b2);
    
    \vertex[above=3em of a4] (c1) {\(\ell^{-}\)}; 
    \vertex[above=2em of c1] (c3) {\(\ell^{+}\)};
    
    \diagram* {
    (a1) -- [fermion] (a2) -- [boson, edge label=\(LQ\),near end] (a3) -- [fermion] (a4),
    (c3) -- [fermion] (a2),
    (a3) -- [fermion] (c1), 
    };
\end{feynman}
\end{tikzpicture}