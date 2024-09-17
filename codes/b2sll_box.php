\usepackage{tikz}
\usepackage[compat=1.1.0]{tikz-feynman}
...
\begin{tikzpicture}
    \begin{feynman}[small]
        \vertex (a1) {\(b\)}; 
        \vertex[right=1.2cm of a1] (a2);
        \vertex[right=1.6cm of a2] (a3);
        \vertex[right=1.2cm of a3] (a4) {\(s\)};
        \vertex[below=1em of a1] (b1); 
        \vertex[below=1em of a4] (b2);
        \vertex[above=3em of a4] (c1) {\(\ell^{-}\)}; 
        \vertex[above=2em of c1] (c3) {\(\ell^{+}\)};
        \vertex[right=0.2cm of a2] (d2);
        \vertex[right=0.2cm of a3] (d3);
        \vertex[above=2.5em of d2] (c2); 
        \vertex[above=2.5em of d3] (c4);
        
        \diagram* {
        (a1) -- [fermion] (a2) -- [fermion, edge label={$u, \, c, \, t$}] (a3) -- [fermion] (a4),
        (c3) -- [fermion] (c2) -- [fermion, edge label=\(\nu\),near end] (c4) -- [fermion] (c1), 
        (a2) -- [boson, edge label=\(W^{-}\)] (c2),
        (a3) -- [boson, edge label'=\(W^{-}\), near end] (c4)
        };
    \end{feynman}
\end{tikzpicture}